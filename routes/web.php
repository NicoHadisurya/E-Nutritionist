<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/set-locale/{locale}', function($locale){
    if(in_array($locale,['en','id'])){
        //create session
        session(['locale' => $locale]);
    }

    return redirect()->back();
})->name('set-locale');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
