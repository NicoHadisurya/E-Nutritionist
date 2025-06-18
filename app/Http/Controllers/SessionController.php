<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    public function index(Request $request){
        $request->session()->put('role','user');
    }

    public function readsession(Request $request){
        $request->session()->get('role');
    }
}
