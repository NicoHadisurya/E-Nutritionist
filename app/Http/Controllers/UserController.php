<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile as ProfileModel;
class UserController extends Controller
{
    //
    public function index(){
        return view('profile');
    }
    
    public function profile(){
        $dataprof = ProfileModel::all();
        return $dataprof;
    }

    public function food(){
        return view('food');
    }
    
    public function (exercise){
        return view('exercise');
    }
}
