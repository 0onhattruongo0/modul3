<?php

namespace App\Http\Controllers;
use App\Models\Commentss;
use App\Models\News;
use App\Models\TypeOfNews;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    public function getlist(){
        $news = News::all();
        return view('admin.News.list', compact('news'));
    }
    public function create(){
        $typeofnews= TypeOfNews::all();
        return view('admin.News.create', compact('typeofnews'));
    }
    public function store(Request $request){
        $news = new News();
        $news->title = $request->input('Title');
        $news->summary = $request->Summary;
        $news->content = $request->Content;
        $news->image   =$request->Image->store('public/image');
        $news->highlights = $request->input('Highlights');
        $news->view = $request->input('View');
        $news->typeofnews_id=$request->typeofnews;
        $news->save();
        Session::flash('success', 'Successful category add');
        return redirect()->route('news.list');
    }

    public function edit($id){
        $news = News::findOrFail($id);
        $typeofnews= TypeOfNews::all();
        return view('admin.News.edit',compact('news','typeofnews'));
    }
    public function update($id, Request $request){
        $news          = News::findOrFail($id);
        $news->title   = $request->input('Title');
        $news->summary = $request->Summary;
        $news->content = $request->Content;
        $news->image=$this-> UpdateUpload($id, $request);
        $news->highlights = $request->input('Highlights');
        $news->view    = $request->input('View');
        $news->typeofnews_id=$request->typeofnews;
        $news->save();
        Session::flash('success', 'Successful category update');
        return redirect()->route('news.list');

    }
    public function UpdateUpload($id,$request){
        $new= News::findOrFail($id);
        if($request->hasFile('Image')){
             $img = $request->image;
            $path = $img->store('public/image');
            return $path;
        } else {
            return $new->image;
        }
        }

    public function destroy($id){
        $news = News::findOrFail($id);
        $news->delete();
        Session::flash('success', 'Successful category delete');
        return redirect()->route('news.list');
    }
}
