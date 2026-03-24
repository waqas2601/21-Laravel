<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function login(Request $request){
        $request->session()->put('user', $request->input('user'));
        echo session('user');
        return redirect('profile');
    }
}
