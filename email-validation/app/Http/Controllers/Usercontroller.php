<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    function validationEmail(Request $request){
    $email= $request->email;
    $ismail=true;
    if(empty($email)|| !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $ismail=false;
    }
    return view('index', compact('ismail'));
    }
}
