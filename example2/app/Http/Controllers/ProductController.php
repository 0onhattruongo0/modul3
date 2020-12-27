<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function productlist(){
        $products=Product::all()->sortByDesc('created-at');
      return  view('index',compact('products'));
    }
    public function formCreateProduct(){
        $categories = Category::all();
      return view('formcreateproduct',compact('categories'));
    }
    public function createProduct(FormProductRequest $request){
        $product= new Product();
        $product->name= $request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->active=$request->active;
        $product->category_id=$request->category;
        $product->save();
        Session::flash('success', 'Thêm sản phẩm thành công');
        return redirect()->route('productlist');

    }
    public function formEditProduct($id){
        $product= Product::findOrFail($id);
        return view('edit',compact('product'));
    }

    public function EditProduct($id, FormProductRequest $request){
        $product= Product::findOrFail($id);
        $product->name= $request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->active=$request->active;
        $product->save();
        Session::flash('success', 'chỉnh sửa thành công');
        return redirect()->route('productlist');

    }
    public function active(){
        $products=Product::where('active',1)->get();
        return  view('index',compact('products'));
    }
    public function unactive(){
        $products=Product::where('active',0)->get();
        return  view('index',compact('products'));
    }
}
