<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    //
    function queries(){
        $result = DB::table('users')->get();
        return $result;
    }
}

