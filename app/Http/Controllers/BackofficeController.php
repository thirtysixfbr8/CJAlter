<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackofficeController extends Controller
{
    public function index(){
        $appContents = json_decode(Storage::disk('local')->get('page.json'), true); 
        return view('backoffice.utilizador', compact('appContents'));
    }
}
