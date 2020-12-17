<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class CustomerController extends Controller
{
    public function index(){
        $customers=Customer::all();
        return view('Customers.list',compact('customers'));
    }
    public function create(){
        return view('Customers.create');
    }
    public function store(Request $request){
        $customer=new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->dob = $request->input('dob');
        $customer->save();
        Session::flash('Success','Tạo khách hàng thành công');
        return redirect()->route('customers.index');
    }
    public function edit($id){
        $customer= Customer::findOrFail($id);
        return view('Customers.edit',compact('customer'));
    }
    public function update(Request $request, $id){
        $customer= Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->dob=$request->input('dob');
        $customer->save();
        Session::flash('success','Cập nhật khách hàng thành công');
        return redirect()->route('customers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */

    public function destroy($id){
        $customer= Customer::findOrFail($id);
        $customer->delete();
        Session::flash('success','Xóa khách hàng thành công');
        return redirect()->route('customers.index');
    }
}
