<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    function get(){
        return "Route Methods (Get Request)";
    }

    function post(){
        return "Route Methods (Post Request)";
    }
    function put(){
        return "Route Methods (Put Request)";
    }
    function delete(){
        return "Route Methods (Delete Request)";
    }

    function any(){
        return "Route Methods (Any Request)";
    }
}
