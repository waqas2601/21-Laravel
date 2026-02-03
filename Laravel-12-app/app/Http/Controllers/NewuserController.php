<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewuserController extends Controller
{
    //
    function addUser(Request $request){
$request->validate([
    'username' => 'required | min:4 | max:10',
    'email' => 'required | email',
    'city' => 'required | max:10',
    'skills' => 'required',
]);

return $request;
    }
}
