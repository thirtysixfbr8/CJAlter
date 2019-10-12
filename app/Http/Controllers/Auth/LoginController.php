<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;




class LoginController extends Controller
{
   
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
   

    /**
     * Where to redirect users after login.
     *
     * #@var string
     */
    protected $redirectTo = '/backoffice/';
    /*public function redirectTo(){
        
        return '/backoffice/'.$userId; 
        Funçao que era redirecionada ao perfil do Usuario
        Mas para uma melhor agrupamento de usuarios de acordo com o seu perfil
        Pode se fazer um switch
        Tipo: switch(user->perfil())
             case 1: return /backoffice //Admin
             case 2: return /backoffice/2(tipo de usuario)/1(id do usuario)
             E assim sucessivamente

    }*/

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }

    



}
