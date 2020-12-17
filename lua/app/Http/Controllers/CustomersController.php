<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use App\Models\Role_customerModel;
use App\Models\RolesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
      public function index(){
          $roles= RolesModel::all();
          $customers = CustomerModel::all();
          return view('admin.customers.list',compact('customers'));
      }
      public function create(){
          $roles= RolesModel::all();
          return view('admin.customers.create',compact('roles'));
      }
      public function store(Request $request){
          $customer = new CustomerModel();
          $customer->name = $request->input('name');
          $customer->username = $request->input('usename');
          $customer->password = $request->input('password');
          $customer->email = $request->input('email');
//          $file=$request->image;
//          $filename=$file->store('public');
//          $customer->image=$filename;
          $customer->image=$request->image->store('public/avatars');
          $customer->address = $request->input('address');
          $customer->birthday = $request->input('date');
          $customer->status=$request->input('status');
          $customer->save();
          $customer->roles()->sync($request->roles);
//          Session::flash('success', 'Successful category add');
          return redirect()->route('customer.index');
      }
      public function destroy($id){
          $roles= DB::table('role__customer')->where('customer_id',$id);
          $roles->delete();
          $customer = CustomerModel::findOrFail($id);
          $customer->delete();
//          Session::flash('success', 'Successful category delete');
          return redirect()->route('customer.index');
      }
      public function edit($id){
          $roles= RolesModel::all();
          $customer= CustomerModel::findOrFail($id);
          return view('admin.customers.edit',compact('customer','roles'));
      }
      public function update($id, Request $request){
          $customer= CustomerModel::findOrFail($id);
          $customer->name = $request->input('name');
          $customer->username = $request->input('usename');
          $customer->password = $request->input('password');
          $customer->email = $request->input('email');
          $customer->image=$request->image->store('public');
          $customer->address = $request->input('address');
          $customer->birthday = $request->input('date');
          $customer->status=$request->input('status');
          $customer->save();
          $customer->roles()->sync($request->roles);
//          Session::flash('success', 'Successful category add');
          return redirect()->route('customer.index');

      }
}
