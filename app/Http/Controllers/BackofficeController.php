<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class BackofficeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //Esta Função será util quando quisermos pegar os dados de um utilizador e mandar para o perfil
    public function show(User $user){
        $user = User::findOrFail($user);
        $appContents = json_decode(Storage::disk('local')->get('page.json'), true); //Esse mambo é chato yh
        return view('backoffice.mediador', compact('appContents',['user' => $user]));
    }

    public function index(){
        $appContents = json_decode(Storage::disk('local')->get('page.json'), true);
        return view('backoffice.utilizador', compact('appContents'));
    }
    
    public function create(User $user){
      
    }
    
}
