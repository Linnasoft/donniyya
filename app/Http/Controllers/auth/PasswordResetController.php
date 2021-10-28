<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;

use App\Models\User;

use Auth;

class PasswordResetController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        $data = [
            'category_name' => '',
            'page_name' => 'password',
            'page_title' => __('auth.password_forgot_page_title'),
            'navbar_target' => '',
            'footer_target' => ''
        ];

        return view('site.auth.password_reset.reset_password')->with($data);
    }

    public function send_email(Request $request)
    {
        if($request->email != '')
        {
            if(filter_var($request->email, FILTER_VALIDATE_EMAIL))
            {
                $user = User::where('email',$request->email)->exists();
                if($user)
                {
                    $status = Password::sendResetLink($request->only('email'));
                    return view('site.auth.password_reset.reset_link_sent')->with('email', $request->email);
                }
                else
                {
                    return back()->with('status','Adresse mail introuvable !')->withInput();
                }
            }
            else
            {
                return back()->with('status','Adresse mail invalide !')->withInput();
            }
        }
        else
        {
            return back()->with('status','Renseignez l\'adresse mail associée à votre compte !')->withInput();
        }
    }

    public function index_new_password($token, $email)
    {
        return view('site.auth.password_reset.new_password', ['token' => $token, 'email' => $email]);
    }

    public function new_password(Request $request)
    {
        if($request->email != '' && $request->password != '' && $request->confirm_password != '' && $request->token != '')
        {
                if($request->password == $request->confirm_password)
                {
                    $status = Password::reset(
                        $request->only('email', 'password', 'confirm_password', 'token'),
                        function ($user, $password) use ($request){
                            $user->forceFill([
                                'password' => Hash::make($password)
                            ])->save();
                
                            $user->setRememberToken(Str::random(60));
                            event(new PasswordReset($user));
                        }
                    );
                    return redirect('/connexion')->with('success', 'Votre mot de passe a été réinitialisé avec succès !');
                }
                else
                {
                    return back()->with('success', 'La confirmation doit correspondre au mot de passe !')->withInput();
                }
        }
        else
        {
            return back()->with('status', 'Entrez le mot de passe et la confirmation !')->withInput();
        }
    }
}
