<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Users;
use Illuminate\Http\Request;
use mysql_xdevapi\Table;

class UsersController extends Controller
{
    public function index(){
        $users= Users::all();
        return view('admin.user.list',compact('users'));
    }
    public function create(){
        return view('admin.user.create');
    }
    public function store(Request $request){
        $user = new Users();
        $user->usename     = $request->input('usename');
        $user->password     = $request->input('password');
        $user->email    = $request->input('email');
        $user->dob      = $request->input('date');
        $user->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới khách hàng thành công');
        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('users.index');
    }
    public function edit($id){
        $user = Users::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }
    public function update($id, Request $request){
        $user = Users::findOrFail($id);
        $user->usename     = $request->input('usename');
        $user->password     = $request->input('password');
        $user->email    = $request->input('email');
        $user->dob      = $request->input('date');
        $user->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');
        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('users.index');
    }
    public function destroy($id){
        $user = Users::findOrFail($id);
        $user->delete();

        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa khách hàng thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('users.index');
    }
    public function getsearch(Request $request){
        $key=$request->input('key');
        $users= Users::where('usename','like','%'.$request->input('key').'%')
            ->orwhere('email','like','%'.$request->input('key').'%')->get();
        return view('admin.user.list',compact('users','key'));

    }
}
