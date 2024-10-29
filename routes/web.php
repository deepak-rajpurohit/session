<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login',[UserController::class,'login']);
// Route::post('login',[UserController::class,'login']);
// Route::view('login','login');
// Route::view('profile', 'profile');
// Route::get('logout',[UserController::class,'logout']);

Route::view('user','user');
Route::post('add',[UserController::class,'addUser']);
