<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
       return view('create');
    }
    public function store(Request $request){
       $validateData=$request->validate([
           'number'=> 'required|numeric'
       ]);
       echo 'Đã xác thực thành công';
    }
}
