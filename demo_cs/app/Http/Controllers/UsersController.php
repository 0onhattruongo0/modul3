<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function getlist(){
        $users = User::all();
        return view('admin.user.list',compact('users'));

    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password =Hash::make($request->input('password'));
        $user->role=$request->role;
        $user->save();
        Session::flash('success', 'Successful users add');
        return redirect()->route('users.list');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('admin.user.edit',compact('user'));
    }
    public function update($id, Request $request){
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password =Hash::make($request->input('password'));
        $user->role=$request->role;
        $user->save();
        Session::flash('success', 'Successful user update');
        return redirect()->route('users.list');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'Successful user delete');
        return redirect()->route('users.list');
    }
    public function getLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request){

    }
}
