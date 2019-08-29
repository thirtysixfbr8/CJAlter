<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';
    private $perfils; 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->perfils = ['Administrador', 'Mediador'];
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $perfilController = new PerfilController();

        $perfils = array_filter($perfilController->get()->all(), function($perfil){
            if($perfil['perfilId'] > 2)
                return $perfil;
        });

        return view('auth.register', ['perfils' => array_reverse($perfils)]);
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telemovel' => ['required', 'min:9','max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telemovel' => $data['telemovel'],
            'perfilId' => $data['perfilId'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
