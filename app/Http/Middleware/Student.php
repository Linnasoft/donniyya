<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check())
        {
            return redirect('/connexion');
        }
        else
        {
            if(Auth::user()->user_status != 'main_admin' && Auth::user()->user_role != 'user_accountant') 
            {
                $active = Corporate::find(Auth::user()->corp_id)->corp_state;
                if($active == 0)
                {
                    $error = 'Le compte semble inactif, merci de nous contacter !';
                    return redirect('deconnexion/'.$error);
                }
                else
                {
                    return $next($request);
                }
            } 
            else 
            {
                abort(404, 'La page recherchée n\'existe pas, veuillez réessayer !');
            }
        }
    }
}
