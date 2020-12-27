<?php

namespace App\Http\Controllers;

use App\Models\nhanvien;
use App\Models\nhomnhanvien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NhanVienController extends Controller
{
    public function nhanvien(){
        $nhanvien= nhanvien::all();
        return view('danhsachnhanvien',compact('nhanvien'));
    }
    public function showaddform(){
        $nhomnhanvien= nhomnhanvien::all();
        return view('themmoinhanvien',compact('nhomnhanvien'));
    }
    public function addnhanvien(Request $request){
        $nhanvien= new NhanVien();
        $nhanvien->Masinhvien=$request->manhanvien;
        $nhanvien->nhomnhanvien_id=$request->nhomnhanvien;
        $nhanvien->Ten=$request->hoten;
        $nhanvien->ngaysinh=$request->ngaysinh;
        $nhanvien->Gioitinh=$request->gioitinh;
        $nhanvien->Sodienthoai=$request->sodienthoai;
        $nhanvien->SoCMND=$request->cmnd;
        $nhanvien->email=$request->email;
        $nhanvien->Diachi=$request->diachi;
        $nhanvien->save();
        Session::flash('success', 'Thêm nhân viên thành công');
        return redirect()->route('nhanvien.list');
    }

    public function xoanhanvien($id){
        $nhanvien= nhanvien::find($id);
        $nhanvien->delete();
        return redirect()->route('nhanvien.list');
    }

    public function suanhanvienform($id){
        $nhanvien= nhanvien::findOrFail($id);
        $nhomnhanvien= nhomnhanvien::all();
        return view('suanhanvien',compact('nhanvien','nhomnhanvien'));
    }
    public function suanhanvien ($id, Request $request){
        $nhanvien= nhanvien::find($id);
        $nhanvien->Masinhvien=$request->manhanvien;
        $nhanvien->nhomnhanvien_id=$request->nhomnhanvien;
        $nhanvien->Ten=$request->hoten;
        $nhanvien->ngaysinh=$request->ngaysinh;
        $nhanvien->Gioitinh=$request->gioitinh;
        $nhanvien->Sodienthoai=$request->sodienthoai;
        $nhanvien->SoCMND=$request->cmnd;
        $nhanvien->email=$request->email;
        $nhanvien->Diachi=$request->diachi;
        $nhanvien->save();
        Session::flash('success', 'Thêm nhân viên thành công');
        return redirect()->route('nhanvien.list');
    }
}
