<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NewuserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DummyApi;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\RouteController;
use League\Uri\Http;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\FlashSessionController;
use App\Http\Controllers\UploadController;

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

Route::view('middleware', 'middleware');

// Database 

Route::get('users', [UsersController::class, 'users']);
Route::get('students', [StudentController::class, 'getStudents']);
Route::get('api', [DummyApi::class, 'getUser']);
Route::get('queries', [QueryController::class, 'queries']);

// Route Methods 

// Route::get('route', [RouteController::class, 'get']);
// Route::post('route', [RouteController::class, 'post']);
// Route::put('route', [RouteController::class, 'put']);
// Route::delete('route', [RouteController::class, 'delete']);

Route::any('route', [RouteController::class,'any']);
Route::view('form', 'route');

// Http Request 

Route::post('http', [HttpController::class, 'login']);
Route::view('form', 'http');

// Sessions 
Route::view('login', 'login');
Route::view('profile', 'profile');
Route::post('login', [SessionController::class , 'login']);

// Flash Session 
Route::view('flashSession', 'flashSession');
Route::post('add', [FlashSessionController::class, 'addUser']);

// Upload File 
Route::view('upload', 'upload');
Route::post('upload', [UploadController::class, 'upload']); 

// Localization 
Route::view('localization', 'localization');