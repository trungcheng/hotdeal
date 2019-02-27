<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Util\Util;
use Carbon\Carbon;
use JWTAuth;
use JWTAuthException;
use Response;
use Mail;

class ApiAppController extends Controller
{
    private $post;

    public function __construct(
        User $user,
        Category $category
    ) {
        $this->user = $user;
        $this->category = $category;
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
            $user = User::where('email', $request->username)
                ->where('status', 1)
                ->where('is_confirmed', 1)
                ->first();
        } else if (is_numeric($request->username)) {
            $credentials = ['mobile' => $request->username, 'password' => $request->password];
            $user = User::where('mobile', $request->username)
                ->where('status', 1)
                ->where('is_confirmed', 1)
                ->first();
        } else {
            $credentials = ['username' => $request->username, 'password' => $request->password];
            $user = User::where('username', $request->username)
                ->where('status', 1)
                ->where('is_confirmed', 1)
                ->first();
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

    public function forgotPwd(Request $request)
    {
        $data = $request->only('email');
        if ($data) {
            $user = User::where('email', $data['email'])->first();
            if ($user) {

                $resetCode = md5($data['email']).uniqid();
                $hash = utf8_encode(base64_encode($resetCode));
                $resetLink = url('api/v1/auth/forgotPwd/confirm') . '?m='.$data['email'].'&token='.$hash;

                // send mail
                Mail::send('pages/admin/mail/resetTemp', [
                    'email' => $data['email'], 
                    'link' => $resetLink
                ], function($message) use ($data) {
                    $message->to($data['email'], 'Hộ Tông Team')->subject('Lấy lại mật khẩu trungtamhotong');
                    $message->from('trungs1bmt@gmail.com', 'Hộ Tông Team');
                });

                if (empty(Mail::failures())) {
                    // send mail success then save data
                    $user->update([
                        'confirmation_code' => $resetCode,
                        'expired_at' => Carbon::now('Asia/Bangkok')->addMinutes(15)->format('Y-m-d H:i:s')
                    ]);

                    return response()->json([
                        'status'  => true,
                        'message' => 'Gửi mail thành công! Vui lòng kiểm tra email để xác nhận lấy lại mật khẩu.'
                    ], 200);
                } else {
                    return response()->json([
                        'status'  => false,
                        'message' => 'Có lỗi xảy ra trong quá trình gửi mail'
                    ], 200);
                }
            }

            return response()->json([
                'status'  => false,
                'message' => 'Không tìm thấy người dùng'
            ], 200);
        }

        return response()->json([
            'status'  => false,
            'message' => 'Data invalid',
            'data'    => []
        ], 200);
    }

    public function confirmForgotPwd(Request $request)
    {
        $data = $request->all();
        if (!empty($data) && isset($data['m']) && isset($data['token'])) {
            $confirmationCode = utf8_decode(base64_decode($data['token']));
            $user = User::where('email', $data['m'])
                ->where('confirmation_code', $confirmationCode)
                ->first();
            if ($user) {
                $time = Carbon::now('Asia/Bangkok')->format('Y-m-d H:i:s');
                if ($time <= $user->expired_at) {
                    return view('pages.user.user.reset', [
                        'm' => $data['m'],
                        'token' => $data['token']
                    ]);
                }

                return response()->json([
                    'status' => false,
                    'message' => 'Token expired'
                ]);                
            }

            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy người dùng'
            ]);            
        }

        return response()->json([
            'status' => false,
            'message' => 'Data invalid'
        ]);
    }

    public function resetForgotPwd(Request $request)
    {
        $data = $request->only('m', 'token', 'password', 'confirm_password');
        $confirmationCode = utf8_decode(base64_decode($data['token']));
        $user = User::where('email', $data['m'])
            ->where('confirmation_code', $confirmationCode)
            ->first();

        if ($user) {
            $time = Carbon::now('Asia/Bangkok')->format('Y-m-d H:i:s');
            if ($time <= $user->expired_at) {
                $validator = Validator::make($data, [
                    'password' => 'min:6|required_with:confirm_password|same:confirm_password',
                    'confirm_password' => 'min:6'
                ], [
                    'password.required' => 'Mật khẩu không được để trống',
                    'password.same' => 'Mật khẩu và xác nhận mật khẩu chưa khớp',
                    'password.min' => 'Mật khẩu ít nhất 6 ký tự trở lên',
                ]);
                if ($validator->fails()) {
                    return response()->json([
                        'status' => false,
                        'message' => $validator->messages()->first(),
                    ], 200);
                }
                $user->update([
                    'password' => $data['password'],
                    'confirmation_code' => '1'
                ]);

                return response()->json([
                    'status' => true,
                    'message' => 'Đổi mật khẩu thành công'
                ], 200);
            }

            return response()->json([
                'status' => false,
                'message' => 'Token expired'
            ], 200);            
        }

        return response()->json([
            'status' => false,
            'message' => 'Không tìm thấy user'
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

    public function getUserInfo(Request $request) {
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }

    public function updateUserAvatar(Request $request)
    {
        try {
            $data = $request->only(['token', 'avatar']);
            if ($data) {
                $userJwt = JWTAuth::toUser($data['token']);
                if ($userJwt) {
                    $user = User::find($userJwt->id);
                    
                    $avatar = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data['avatar']));
                    $imageName = 'user-avatar-app-'.time();
                    $fileName = $imageName . '.' . 'png';
                    file_put_contents(public_path('uploads/images/avatars/'.$fileName), $avatar);

                    $user->update([
                        'avatar' => url('/uploads/images/avatars/'.$fileName)
                    ]);

                    return response()->json([
                        'status'  => true,
                        'message' => 'Update avatar success',
                        'data'    => url('/uploads/images/avatars/'.$fileName)
                    ], 200);
                }

                return response()->json([
                    'status'  => false,
                    'message' => 'User not found',
                    'data'    => ''
                ], 200);
            }

            return response()->json([
                'status'  => false,
                'message' => 'No data provided',
                'data'    => ''
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage(),
                'data'    => ''
            ], 200);
        }
    }

    public function updateUserInfo(Request $request)
    {
        try {
            $data = $request->only(['token', 'fullname', 'sex', 'birthday', 'bio', 'address', 'mobile']);
            if ($data) {
                $userJwt = JWTAuth::toUser($data['token']);
                if ($userJwt) {
                    $user = User::find($userJwt->id);
                    $user->update([
                        'fullname' => ($data['fullname']) ? $data['fullname'] : $user->fullname,
                        'sex'       => ($data['sex']) ? $data['sex'] : $user->sex,
                        'birthday'  => ($data['birthday']) ? $data['birthday'] : $user->birthday,
                        'bio'       => ($data['bio']) ? $data['bio'] : $user->bio,
                        'address'   => ($data['address']) ? $data['address'] : $user->address,
                        'mobile'   => ($data['mobile']) ? $data['mobile'] : $user->mobile
                    ]);
                    return response()->json([
                        'status'  => true,
                        'message' => 'Update info success',
                        'data'    => $user
                    ], 200);
                }

                return response()->json([
                    'status'  => false,
                    'message' => 'User not found',
                    'data'    => []
                ], 200);
            }

            return response()->json([
                'status'  => false,
                'message' => 'No data provided',
                'data'    => []
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage(),
                'data'    => []
            ], 200);
        }
    }

}