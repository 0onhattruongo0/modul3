<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $user = array(
            array(
                'id' => 1,
                'Name' => 'Trường',
                'Email' => 'truong@gmail.com',
                'Address' => 'Hue'
            ),
            array(
                'id'=>2,
                'Name' => 'Quy',
                'Email' => 'quy@gmail.com',
                'Address' => 'Hue'
            ),
            array(
                'id'=>3,
                'Name' => 'Quang',
                'Email' => 'quang@gmail.com',
                'Address' => 'Hue'
            )
        );

        return view('admin.user.index', compact('user'));
    }
    function edit($id){

    }
    function delete($id){

    }
    function create(){
       return view('admin.user.create');
    }

}

