<?php
namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\MediaPlaylist;
use App\Models\Playlist;
use App\Models\Media;
use App\Models\User;
use Carbon\Carbon;
use JWTAuth;
use JWTAuthException;
use Response;

class ApiAppController extends Controller
{

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

    public function createPlaylist(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), ['name' => 'required|min:2']);
            if ($validator->fails()) {
                return response()->json([ 
                    'status' => false,
                    'message' => 'Bạn phải nhập tên Playlist',
                ], 200);
            }

            $user = JWTAuth::toUser($request->token);
            Playlist::firstOrCreate([
                'user_id' => $user['id'],
                'name' => $request->title, 
                'slug' => str_slug($request->title, '-'),
                'image' => 'http://vietid.vcmedia.vn/vietid/image/avatars/default.png',
                'status' => 1
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

    public function getPlaylist(Request $request) {

        $user = JWTAuth::toUser($request->token);
        try {
            $playlists = Playlist::where('id', '>', 0)
                ->where('user_id', $user['id'])
                ->orderBy('created_at', 'desc')
                ->paginate(20);

            return Response::json($playlists);
        } catch (JWTAuthException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Failed token'
            ], 200);
        }

    }

    public function getPlaylistDetail(Request $request) {

        try {
            $results = [];
            if ($request->has(['id'])) {
                $results = Playlist::where('id', $request->id)->first();
                $list_song = DB::table('media_playlist')
                    ->join('media', 'media_playlist.media_id', '=', 'media.id')
                    ->select(
                        'media_playlist.*',
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
                    ->where('media_playlist.playlist_id', $request->id)
                    ->get();
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
            $songs = MediaPlaylist::where('id', '>', 0)->get();
            if (!empty($songs)) {
                $results = DB::table('media_playlist')
                    ->join('media', 'media_playlist.media_id', '=', 'media.id')
                    ->where('media_playlist.playlist_id', $request->playlist)
                    ->select(
                        'media_playlist.*',
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

    public function addOneSongToPlaylist(Request $request) {

        try {
            $checkPlaylist = Playlist::where('id', $request->playlist_id)->first();
            if ($checkPlaylist){
                $checkSong = DB::table('media_playlist')
                    ->where('media_id', $request->media_id)
                    ->where('playlist_id', $request->playlist_id)
                    ->get();

                if (!empty($checkSong)) {
                    return response()->json([
                        'status' => false,
                        'message' => "Pháp thoại này đã tồn tại trong playlist."
                    ], 200);
                } else {
                    MediaPlaylist::firstOrCreate([
                        'media_id' => $request->media_id,
                        'playlist_id' => $request->playlist_id
                    ]);

                    return response()->json([
                        'status' => true,
                        'message' => 'Add to playlist success.'
                    ], 200);
                }        
            } else {
                return response()->json([
                    'status' => false,
                    'message' => "Không tìm thấy playlist này"
                ], 200);
            }
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }

    }

    public function editPlaylist(Request $request) {

        try {
            $user = JWTAuth::toUser($request->token);
            $checkPlaylist = Playlist::where('id', $request->playlist_id)->first();
            if ($checkPlaylist) {
                Playlist::where('id', $request->playlist_id)
                    ->where('user_id', $user['id'])
                    ->update([
                        'name' => $request->title,
                        'slug' => str_slug($request->title, '-'),
                        'image' => $request->image
                      ]);

                if (!empty($request->list_song)) {
                    MediaPlaylist::where('playlist_id', $request->playlist_id)->delete();
                    $medias = $request->list_song;
                    foreach ($medias as $media) {
                        ListMediaPlaylist::firstOrCreate([
                            'media_id' => $media,
                            'playlist_id' => $request->playlist_id
                        ]);
                    }
                }       

                return response()->json([
                    'status' => true,
                    'message' => 'Edit playlist success.'
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Không tồn tại playlist trong hệ thống.'
                ], 200);
            }
            
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }

    }

    public function deletePlaylist(Request $request) {

        try {
            $checkPlaylist = Playlist::where('id', $request->id)->first();
            if ($checkPlaylist) {
                $user = JWTAuth::toUser($request->token);
                Playlist::where('id', $request->id)
                    ->where('user_id', $user['id'])
                    ->delete();
                MediaPlaylist::where('playlist_id', $request->id)->delete();       

                return response()->json([
                    'status' => true,
                    'message' => 'Delete playlist success.'
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Không tồn tại playlist trong hệ thống.'
                ], 200);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 200);
        }

    }

    public function getAllSong(Request $request) {

        try {
            $results = Media::select(
                'media.id',
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