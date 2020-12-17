<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\TypeOfNews;

class TypeOfNewsController extends Controller
{
    public function getlist(){
        $typeofnews = TypeOfNews::all();
        return view('admin.TypeOfNews.list',compact('typeofnews'));

    }
    public function create(){
        $categories= Category::all();
        return view('admin.TypeOfNews.create', compact('categories'));
    }
    public function store(Request $request){
        $typeofnew = new TypeOfNews();
        $typeofnew->name = $request->input('nameTypeOfNews');
        $typeofnew->category_id= $request->category;
        $typeofnew->save();
        Session::flash('success', 'Successful category add');
        return redirect()->route('typeofnews.list');
    }

    public function edit($id){
        $typeofnews = TypeOfNews::findOrFail($id);
        $categories= Category::all();
        return view('admin.TypeOfNews.edit',compact('typeofnews','categories'));
    }
    public function update($id, Request $request){
        $typeofnews = TypeOfNews::findOrFail($id);
        $typeofnews->name=$request->input('nameTypeOfNews');
        $typeofnews->category_id= $request->category;
        $typeofnews->save();
        Session::flash('success', 'Successful category update');
        return redirect()->route('typeofnews.list');
    }
    public function destroy($id){
        $typeofnew = TypeOfNews::findOrFail($id);
        $typeofnew->delete();
        Session::flash('success', 'Successful category delete');
        return redirect()->route('typeofnews.list');
    }
}
