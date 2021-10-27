<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;

use Session;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        $data = [
            'category_name' => '',
            'page_name' => 'login',
            'page_title' => __('auth.login_page_title'),
            'navbar_target' => '',
            'footer_target' => ''
        ];

        return view('auth.login.login')->with($data);
    }

    public function log_user(Request $request)
    {

        $credentials = $request->all('email', 'password');

        if($request->email != '' && $request->password != '' )
        {
            $remember = $request->has('remember_me') ? true : false;

            if(Auth::attempt($credentials,$remember))
            {  
                if(Auth::user()->user_status == 'user_student' || Auth::user()->user_status == 'user_teacher') 
                {
                    return redirect('/')
                           ->with('status', 'Bienvenue sur '.config('app.name').', '.Auth::user()->firstname);
                }
                else // admin redirection
                {
                    
                }
            }
            else
            {
                return back()->with('status', 'Vos identifiants sont incorrects !')->withInput();
            }
        }
        else
        {
            return back()->with('status', 'Renseignez l\'email et le mot de passe !')->withInput();
        }
    }

    public function logout($error = null)
    {
        Auth::logout();

        if($error != null)
        {
            return redirect('/connexion')->with('error', $error);
        }
        else
        {
            return redirect('/connexion');
        }
    }
}
