<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
   function upload(Request $request){
    $path = $request->file('file')->store('uploads', 'public');
    $fileName = basename($path);  // Gets just the filename
    
    return view('displayImg', ['path' => $fileName]);
}
}
