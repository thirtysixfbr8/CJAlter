<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;

class BackofficeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //Esta Função será util quando quisermos pegar os dados de um utilizador e mandar para o perfil
    public function show(User $user){
        $user = User::findOrFail($user);
        return view('backoffice.backoffice', compact(['user' => $user]));
    }

    public function index(){
        $user = Auth::user();
        return view('backoffice.backoffice', compact('user'));
    }
    
    public function create(User $user){
      
    }
    
}
