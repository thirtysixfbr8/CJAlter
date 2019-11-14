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
    protected $redirectTo = '/backoffice';
    private $perfils; 

    /*public function redirectTo(){ 
        $logado = auth()->user()->id;    //Essa funcao permite redirecionar para paginas/rotas especificas. A variável redirectTo deve ser comentada.
         return '/backoffice/'.$logado;
             
    }/*

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

    public function showRegistrationForm() //me explica bem o propósito dessa função 
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
            'name' => ['required', 'alpha', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telemovel' => ['required', 'min:9','max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'birth' => ['required','date'], #Mediador
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
        $user = new User();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->telemovel = $data['telemovel'];
        $user->perfilId = $data['perfilId'];
        $user->password = Hash::make($data['password']);
        
        return $this->createUser($user);
    }

    private function createUser(User $user){
        switch($user->perfilId){
            case 2:
                $mediadorController = new MediadorController();
                return $mediadorController->create($user);
            default:
                $clienteController = new ClienteController();
                return $clienteController->create($user);
        }
    }
}
