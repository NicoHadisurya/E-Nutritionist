<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile as ProfileModel;
class UserController extends Controller
{
    //
    public function index(){
        
    }
    public function profile(){
        $dataprof = ProfileModel::all();
        return $dataprof;
    }
}
