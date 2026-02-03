<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUser(){
        return "Waqas";
    } 

    function aboutUser(){
        return "Hello my name is waqas";
    }

    function getUserName($name){
        // return "Hello my name is ". $name;
        return view ('getUser', ['name' => $name]);
    }

    function userHome(){
        $name = 'waqas';
        $users = ['waqas', 'ahmad', 'khan'];
        return view('home',["name"=>$name, "users"=>$users]);
    }

    function adminLogin(){
        if(View::exists('admin.login')){
        return view('admin.login');

        }else{
            echo "No view found";
        }
    }
}
