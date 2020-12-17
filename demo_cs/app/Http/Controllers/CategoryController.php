<?php

namespace App\Http\Controllers;



use App\Http\Requests\FormCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function getlist(){
        $categories = Category::all();
        return view('admin.Category.list',compact('categories'));

    }
    public function create(){
        return view('admin.Category.create');
    }
    public function store(FormCategoryRequest $request){
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        Session::flash('success', 'Successful category add');
        return redirect()->route('category.list');
    }

    public function edit($id){
        $categories = Category::findOrFail($id);
        return view('admin.Category.edit',compact('categories'));
    }
    public function update($id, Request $request){
        $categories = Category::findOrFail($id);
        $categories->name=$request->input('nameCategory');
        $categories->save();
        Session::flash('success', 'Successful category update');
        return redirect()->route('category.list');
    }
    public function destroy($id){
        $categories = Category::findOrFail($id);
        $typeofnew= DB::table('type_of_news')->where('category_id',$id);
        $typeofnew->delete();
        $categories->delete();
        Session::flash('success', 'Successful category delete');
        return redirect()->route('category.list');
    }
}
