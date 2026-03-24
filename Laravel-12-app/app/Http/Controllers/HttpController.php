<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{
    function login(Request $request){
echo "Request method is ". $request->method();
echo "<br>";
echo "Request url is ". $request->path();

    }
    //
}
