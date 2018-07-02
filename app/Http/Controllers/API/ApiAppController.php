<?php
namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Playlist;
use App\Models\Media;
use App\Models\ListMediaPlaylist;
use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Facades\DB;

class ApiAppController extends Controller
{

    private $playlist;
    private $media;
    private $listMediaPlaylist;
    public function __construct(
        Playlist $playlist,
        Media $media,
        ListMediaPlaylist $listMediaPlaylist
    ) {
        $this->playlist = $playlist;
        $this->media = $media;
        $this->listMediaPlaylist = $listMediaPlaylist;
    }

    public static $rules = [
        'email' => 'required|email|unique:users',
        'username' => 'required|min:3|string|max:150|alpha_num|unique:users',
        'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'min:6',
        'fullname' => 'required|min:3|',
        'mobile' => 'required|numeric|digits_between:10,11|unique:users'
    ];

    public static $messages = [
        'email.required' => 'Địa chỉ email không được để trống',
        'email.email' => 'Địa chỉ email chưa đúng định dạng',
        'email.unique' => 'Địa chỉ email đã tồn tại trong hệ thống',
        'username.alpha_num' => 'Username phải viết liền và sử dụng chữ không dấu',
        'username.required' => 'Username không được để trống',
        'username.min' => 'Username ít nhất 3 ký tự trở lên',
        'username.unique' => 'Username đã tồn tại trong hệ thống',
        'password.required' => 'Mật khẩu không được để trống',
        'password.same' => 'Mật khẩu và xác nhận mật khẩu chưa khớp',
        'password.min' => 'Mật khẩu ít nhất 6 ký tự trở lên',
        'mobile.required' => 'Số điện thoại không được để trống',
        'mobile.digits_between' => 'Số điện thoại phải 10 hoặc 11 số ',
        'mobile.numeric' => 'Số điện thoại chỉ được nhập số',
        'mobile.unique' => 'Số điện thoại đã tồn tại trong hệ thống',
        'fullname.required' => 'Họ tên không được để trống',
        'fullname.min' => 'Họ tên phải ít nhất 3 ký tự',
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
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $credentials = ['email' => $request->username, 'password' => $request->password];
            $user = User::where('email', $request->username)->first();
        } else if (is_numeric($request->username)) {
            $credentials = ['mobile' => $request->username, 'password' => $request->password];
            $user = User::where('mobile', $request->username)->first();
        } else {
            $credentials = ['username' => $request->username, 'password' => $request->password];
            $user = User::where('username', $request->username)->first();
        }

        // if ($request->has(['email', 'password'])) {
        //     $credentials = $request->only('email', 'password');
        //     $user = User::where('email', $request->email)->first();
        //     // $credentials = $request->only('password');
        //     // $user = User::where('username', $request->email)->orWhere('mobile', $request->email)->orWhere('email', $request->email)->first();
        // } else if ($request->has(['username', 'password'])) {
        //     $credentials = $request->only('username', 'password');
        //     $user = User::where('username', $request->username)->first();
        //     // $credentials = $request->only('password');
        //     // $user = User::where('username', $request->username)->orWhere('mobile', $request->username)->orWhere('email', $request->username)->first();
        // } else {
        //     $credentials = $request->only('mobile', 'password');
        //     $user = User::where('mobile', $request->mobile)->first();
        // }

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

        if ($user) {
            $user->update(['jwt_token' => $token]);    
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Username, số điện thoại hoặc email bạn nhập không đúng.'
            ], 200);
        }

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

    public function getPlaylistDetail(Request $request){
        try {
            $results = [];

            if ($request->has(['id'])) {
                $results = Playlist::where('id', $request->id)->first();
                $list_song = DB::table('list_playlist_media')
                                ->join('media', 'list_playlist_media.media_id', '=', 'media.id')
                                ->select(
                                    'list_playlist_media.*',
                                    'media.parent_id',
                                    'media.filename',
                                    'media.filesize',
                                    'media.filetype', 
                                    'media.file_srt',
                                    'media.source',
                                    'media.duration',
                                    'media.author',
                                    'media.singer',
                                    'media.image',
                                    'media.display',
                                    'media.ordering',
                                    'media.created_at',
                                    'media.updated_at'
                                )
                                ->where('list_playlist_media.playlist_id', $request->id)
                                ->get();
            } else {
                
            }

            return response()->json([
                'detail' => $results,
                'list_song' => $list_song
            ], 200);
        } catch (JWTAuthException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed token'
            ], 200);
        }
    }

    public function getListSongInPlaylist(Request $request){
        try {
            $results = [];
            $songs = $this->listMediaPlaylist->where('id', '>', 0)->get();
            if (!empty($songs)) {
                $results = DB::table('list_playlist_media')
                                ->join('media', 'list_playlist_media.media_id', '=', 'media.id')
                                ->where('list_playlist_media.playlist_id', $request->playlist)
                                ->select(
                                    'list_playlist_media.*',
                                    'media.parent_id',
                                    'media.filename',
                                    'media.filesize',
                                    'media.filetype', 
                                    'media.file_srt',
                                    'media.source',
                                    'media.duration',
                                    'media.author',
                                    'media.singer',
                                    'media.image',
                                    'media.display',
                                    'media.ordering',
                                    'media.created_at',
                                    'media.updated_at'
                                )
                                ->orderBy('media.created_at', 'desc')
                                ->paginate(20);
            }
            return Response::json($results);
        } catch (JWTAuthException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed token'
            ], 200);
        }
    }

    public function AddOneSongToPlaylist(Request $request){
        try {
            $check_playlist = Playlist::where('id', $request->playlist_id)->first();
            if($check_playlist){
                $current = Carbon::now();
                $check_song = DB::table('list_playlist_media')
                                ->where('media_id', $request->media_id)
                                ->where('playlist_id', $request->playlist_id)
                                ->get();
                if(count($check_song) > 0){
                    return response()->json([
                        'status' => false,
                        'message' => "Pháp thoại này đã tồn tại trong Playlist."
                    ], 200);
                }else{
                    ListMediaPlaylist::firstOrCreate([
                        'media_id' => $request->media_id,
                        'playlist_id' => $request->playlist_id,
                        'created_at'=> $current,
                        'updated_at'=> $current
                    ]);
                    return response()->json([
                        'status' => true,
                        'message' => 'Add to playlist success.'
                    ], 200);
                }        
            }else{
                return response()->json([
                    'status' => false,
                    'message' => "Không tồn tại Playlist trong hệ thống."
                ], 200);
            }
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }

    public function editPlaylist(Request $request){
        try {
            $user = JWTAuth::toUser($request->token);
            $check_playlist = Playlist::where('id', $request->playlist_id)->first();
            if($check_playlist){
                $current = Carbon::now();
                DB::table('playlist')
                    ->where('id', $request->playlist_id)
                    ->where('user_id', $user['id'])
                    ->update([
                        'title' => $request->title, 
                        'image' => $request->image,
                        'description' => $request->description,
                        'updated_at'=> $current
                      ]);

                if(count($request->list_song) > 0){
                    DB::table('list_playlist_media')->where('playlist_id', $request->playlist_id)->delete();
                    $medias = $request->list_song;
                    foreach ($medias as $media) {
                        ListMediaPlaylist::firstOrCreate([
                            'media_id' => $media,
                            'playlist_id' => $request->playlist_id,
                            'created_at'=> $current,
                            'updated_at'=> $current
                        ]);
                    }
                }       

                return response()->json([
                    'status' => true,
                    'message' => 'Edit playlist success.'
                ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'Không tồn tại Playlist trong hệ thống.'
                ], 200);
            }
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }

    public function deletePlaylist(Request $request){
        try {
            $check_playlist = Playlist::where('id', $request->id)->first();
            if($check_playlist){
                $user = JWTAuth::toUser($request->token);
                DB::table('playlist')
                    ->where('id', $request->id)
                    ->where('user_id', $user['id'])
                    ->delete();

                DB::table('list_playlist_media')->where('playlist_id', $request->id)
                    ->delete();       

                return response()->json([
                    'status' => true,
                    'message' => 'Delete playlist success.'
                ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'message' => 'Không tồn tại Playlist trong hệ thống.'
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }
    }

    public function getAllSong(Request $request){
        try {
            $results = [];
            $results = DB::table('media')
                                ->select(
                                    'media.id',
                                    'media.parent_id',
                                    'media.filename',
                                    'media.filesize',
                                    'media.filetype', 
                                    'media.file_srt',
                                    'media.source',
                                    'media.duration',
                                    'media.author',
                                    'media.singer',
                                    'media.image',
                                    'media.display',
                                    'media.ordering',
                                    'media.created_at',
                                    'media.updated_at'
                                )
                                ->orderBy('media.created_at', 'desc')
                                ->paginate(20);
            return Response::json($results);
        } catch (JWTAuthException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed token'
            ], 200);
        }
    }
    
}  