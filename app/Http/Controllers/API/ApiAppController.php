<?php
namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Playlist;
use App\Models\ListMediaPlaylist;
use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use Carbon\Carbon;
use Response;

class ApiAppController extends Controller
{

    private $playlist;
    public function __construct(
        Playlist $playlist
    ) {
        $this->playlist = $playlist;
    }

    public static $rules = [
        'email' => 'required|email|unique:users',
        'username' => 'required|min:3',
        'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'min:6'
    ];

    public static $messages = [
        'email.required' => 'Địa chỉ email không được để trống',
        'email.email' => 'Địa chỉ email chưa đúng định dạng',
        'email.unique' => 'Địa chỉ email đã tồn tại',
        'username.required' => 'Username không được để trống',
        'username.min' => 'Username ít nhất 3 ký tự trở lên',
        'password.required' => 'Mật khẩu không được để trống',
        'password.same' => 'Mật khẩu và xác nhận mật khẩu chưa khớp',
        'password.min' => 'Mật khẩu ít nhất 6 ký tự trở lên',
    ];

    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), self::$rules, self::$messages);
            if ($validator->fails()) {
                return response()->json([ 
                    'status' => false,
                    'message' => $validator->messages()->first(),
                ], 200);
            }
            $user = User::firstOrCreate([
                'role_id' => 3,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $request->password,
                'fullname' => ($request->fullname) ? $request->fullname : '',
                'mobile' => ($request->mobile) ? $request->mobile : '',
                'address' => ($request->address) ? $request->address : '',
                'sex' => ($request->sex) ? $request->sex : '',
                'birthday' => ($request->birthday) ? $request->birthday : '',
                'bio' => ($request->bio) ? $request->bio : '',
                'avatar' => 'http://vietid.vcmedia.vn/vietid/image/avatars/default.png',
                'is_confirmed' => 0
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User created successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }

    public function login(Request $request)
    {
        if ($request->has(['email', 'password'])) {
            $credentials = $request->only('email', 'password');
            $user = User::where('email', $request->email)->first();
        } else {
            $credentials = $request->only('username', 'password');
            $user = User::where('username', $request->username)->first();
        }

        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'status' => false, 
                'message' => 'Invalid credentials'
            ], 200);
           }
        } catch (JWTAuthException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed to create token'
            ], 200);
        }

        $payload = JWTAuth::getPayload($token);
        $expirationTime = $payload['exp'];
        $user->update(['jwt_token' => $token]);

        return response()->json([ 
            'status' => true,
            'token' => $token,
            'user' => $user,
            'expired_at' => $expirationTime
        ], 200);
    }

    public function recoverPassword(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->update([
                'password' => $request->password
            ]);

            return response()->json([
                'status' => true
            ], 200);
        }

        return response()->json([
            'status' => false
        ], 200);
    }

    public function refresh(Request $request)
    {

        $token = JWTAuth::getToken();

        if (!$token) {
            return response()->json([
                "status" => false,
                "error" => 'Token invalid'
            ], 200);
        }

        try {
            $refreshedToken = JWTAuth::refresh($token);
            $user = JWTAuth::setToken($refreshedToken)->toUser();
        } catch (JWTException $e) {
            return response()->json([
                "status" => false,
                "error" => $e->getMessage()
            ], 200);
        }

        return response()->json([
            "status" => true,
            "token" => $refreshedToken, 
            "user" => $user
        ], 200);

    }

    public function logout(Request $request)
    {
        try {
            $token = JWTAuth::getToken();
            JWTAuth::invalidate($token);

            return response()->json([
                'status' => true,
                'message' => 'Logout success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Logout fail'
            ]);
        }
    } 

    public function getUserInfo(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }

    public function create_playlist(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), ['title' => 'required|min:2']);
            if ($validator->fails()) {
                return response()->json([ 
                    'status' => false,
                    'message' => 'Bạn phải nhập tên Playlist',
                ], 200);
            }

            $user = JWTAuth::toUser($request->token);

            $current = Carbon::now();
            Playlist::firstOrCreate([
                'user_id' => $user['id'],
                'title' => $request->title, 
                'image' => 'http://vietid.vcmedia.vn/vietid/image/avatars/default.png',
                'description' => '',
                'type' => 0,
                'created_at'=> $current,
                'updated_at'=> $current
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Creat playlist success.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }

    public function getPlaylist(Request $request){
        $user = JWTAuth::toUser($request->token);
        try {
           if($user){
                $results = [];
                $posts = $this->playlist->where('id', '>', 0)->get();
                if (!empty($posts)) {
                    $posts = $this->playlist->where('id', '>', 0);
                    // $posts->delete()->where('user_id', $user['id']);
                    $posts->where('user_id', $user['id']);

                    $results = $posts->select(
                        'id',
                        'user_id',
                        'title',
                        'image',
                        'description',
                        'created_at',
                        'updated_at'
                    )->orderBy('created_at', 'desc')->paginate(20);
                }
                return Response::json($results);
            }
        } catch (JWTAuthException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed token'
            ], 200);
        }
    }

    public function AddToPlaylist(Request $request){
        try {
            $user = JWTAuth::toUser($request->token);

            $current = Carbon::now();
            $medias = $request->media_id;
            foreach ($medias as $media) {
                ListMediaPlaylist::firstOrCreate([
                    'media_id' => $media,
                    'playlist_id' => $request->playlist_id,
                    'created_at'=> $current,
                    'updated_at'=> $current
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Add to playlist success.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }
    
}  