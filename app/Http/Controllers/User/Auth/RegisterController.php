<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/account/signin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('user.guest');
    }

    public function showRegistrationForm()
    {
        return view('pages.user.auth.signup');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile' => 'required|numeric|digits_between:10,11',
            'password' => 'min:6|max:32|required_with:repassword|same:repassword'
        ], [
            'fullname.required' => 'Họ và tên không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'mobile.required' => 'Số điện thoại không được để trống',
            'mobile.numeric' => 'Số điện thoại phải là định dạng số',
            'mobile.digits_between' => 'Số điện thoại phải 10 hoặc 11 số ',
            'password.required' => 'Mật khẩu không được để trống',
            'password.same' => 'Mật khẩu và xác nhận mật khẩu chưa khớp',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự trở lên',
            'password.max' => 'Mật khẩu tối đa 32 ký tự'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $confirmationCode = md5($data['email']).uniqid();
        $hash = utf8_encode(base64_encode($confirmationCode));
        $confirmationLink = url('dang-nhap') . '?m='.$data['email'].'&token='.$hash;

        // send mail
        Mail::send('pages/user/mail/register_confirm_temp', [
            'email' => $data['email'], 
            'link' => $confirmationLink
        ], function($message) use ($data) {
            $message->to($data['email'])->subject('Xác nhận đăng ký tài khoản');
        });

        if (empty(Mail::failures())) {
            // send mail success then save data
            User::create([
                'role_id' => 3,
                'fullname' => $data['fullname'],
                'email' => $data['email'],
                'password' => $data['password'],
                'mobile' => (isset($data['mobile']) && $data['mobile'] !== '') ? $data['mobile'] : '',
                'address' => (isset($data['address']) && $data['address'] !== '') ? $data['address'] : '',
                'confirmation_code' => $confirmationCode,
                'is_confirmed' => 0
            ]);

            return [
                'status'  => true,
                'message' => 'Hoàn tất! Vui lòng kiểm tra email để xác nhận quá trình đăng ký.'
            ];
        } else {
            return [
                'status'  => false,
                'message' => 'Có lỗi xảy ra'
            ];
        }

    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $process = $this->create($request->all());
        if ($process['status']) {
            return redirect($this->redirectPath())->with('success', $process['message']);
        }

        return redirect()->back()->with('error', $process['message']);
    }
}
