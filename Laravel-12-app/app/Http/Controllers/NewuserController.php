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
    'city' => 'required | max:10 | uppercase',
    'skills' => 'required',
], [
    'username.required' => 'User field can not be empty',

    'city.uppercase' => 'city should be in uppercase only',
]);

return $request;
    }
}
