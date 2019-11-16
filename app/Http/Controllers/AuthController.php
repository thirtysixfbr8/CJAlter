<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{

    public function __construct(){
        $this->middleware('web');//Gambiarra Braaah
    }

    use AuthenticatesUsers;

    public function logout(Request $request){
        Auth::logout();//Gambiarra Braaah
        return response()->json(['status' => 200]);
    }
}
