<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest1;
use App\Models\GroupStaff;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    public function getStaff(){
        $staffs= Staff::all();
        return view('index',compact('staffs'));

    }
    public function formAddStaff(){
        $groupstaffs=GroupStaff::all();
        return view('addstaff',compact('groupstaffs'));

    }
    public function AddStaff(FormRequest1 $request){
        $staff= new Staff();
        $staff->IdStaff=$request->IdStaff;
        $staff->GroupStaff_id=$request->GroupStaff;
        $staff->name=$request->name;
        $staff->birthday=$request->birthday;
        $staff->gender=$request->gender;
        $staff->phone=$request->phone;
        $staff->CMND=$request->CMND;
        $staff->email=$request->email;
        $staff->address=$request->address;
        $staff->save();
        Session::flash('success', 'Thêm nhân viên thành công');
        return redirect()->route('liststaff');


    }

    public function formEditStaff($id){
        $staff= Staff::findOrFail($id);
        $groupstaffs= GroupStaff::all();
//        dd($groupstaffs);
        return view('editstaff',compact('staff', 'groupstaffs'));

    }
    public function EditStaff($id, FormRequest1 $request){
        $staff= Staff::findOrFail($id);
        $staff->IdStaff=$request->IdStaff;
        $staff->GroupStaff_id=$request->GroupStaff;
        $staff->name=$request->name;
        $staff->birthday=$request->birthday;
        $staff->gender=$request->gender;
        $staff->phone=$request->phone;
        $staff->CMND=$request->CMND;
        $staff->email=$request->email;
        $staff->address=$request->address;
        $staff->save();
        Session::flash('success', 'chỉnh sửa thành công');
        return redirect()->route('liststaff');

    }
    public function destroyStaff($id){
        $staff= Staff::findOrFail($id);
        $staff->delete();
        return redirect()->route('liststaff');

    }

    public function searchstaff(Request $request){
          $key=$request->key;
          $staffs= Staff::where('name','like','%'.$key.'%')
              ->orwhere('IdStaff','like','%'.$key.'%')
              ->orwhere('email','like','%'.$key.'%')->get();
        return view('index',compact('staffs','key'));
    }
}
