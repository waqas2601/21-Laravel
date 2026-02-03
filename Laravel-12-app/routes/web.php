<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewuserController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::view('/home', 'home');

// route::redirect('/home', '/');

Route::get('/about/{name}', function($name){
    // echo $name;
    return view('about',['name' => $name]);
});

Route::get('user', [UserController::class, 'getUser']);
Route::get('about', [UserController::class, 'aboutUser']);
Route::get('user/{name}', [UserController::class, 'getUserName']);

Route::get('userHome', [UserController::class, 'userHome']);
Route::get('admin-login', [UserController::class, 'adminLogin']);

Route::view('user-form', 'user-form');
Route::post('adduser', [NewuserController::class, 'adduser']);