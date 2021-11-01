<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

use App\Models\User;
use App\Mail\UserRegistered;

use Auth;
use Session;


class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index_basic_member()
    {
        $data = [
            'category_name' => '',
            'page_name' => 'register',
            'page_title' => __('auth.register_page_title'),
            'navbar_target' => '',
            'footer_target' => ''
        ];
    
        return view('site.auth.register.register')->with($data);
    }

    public function register_basic_member(Request $request)
    {
        if($request->firstname != '' && $request->lastname != '' && $request->email != '' && $request->password != '' && $request->password_confirm != '')
        {
            if(filter_var($request->email, FILTER_VALIDATE_EMAIL))
            {
                $user_exists = User::where('email', $request->email)->first();
                if(!$user_exists)
                {
                    if($request->password == $request->password_confirm)
                    {
                        $token = md5(rand()).time();
                        $user = new User();
                        $user->firstname = $request->firstname;
                        $user->lastname = $request->lastname;
                        $user->email = $request->email;
                        $user->password = Hash::make($request->password);
                        $user->user_status = 'user_student';
                        $user->token = $token;
                        $user->save();

                        Mail::to($request->email)
                        ->send(
                            new UserRegistered($request->firstname, $request->email)
                        );

                        return view('site.auth.register.registration_done')->with('email', $request->email);
                    }
                    else
                    {
                        return back()->with('status', __('auth.register_error_password_confirmation_no_match'))
                        ->withInput();
                    }
                }
                else
                {
                    return back()->with('status', __('auth.register_error_email_exists'))->withInput();
                }
            }
            else
            {
                return back()->with('status', __('auth.register_error_invalid_email'))->withInput();
            }
        }
        else
        {
            return back()->with('status', __('auth.register_error_no_credential'))->withInput();
        }
    }

    public function index_teacher()
    {
        return view('site.auth.register.register_teacher');
    }
}