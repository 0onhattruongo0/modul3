<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SlideController extends Controller
{
    public function getlist(){
        $slides = Slide::all();
        return view('admin.Slide.list',compact('slides'));

    }
    public function create(){
        return view('admin.Slide.create');
    }
    public function store(Request $request){
        $slides = new Slide();
        $slides->name = $request->input('Name');
        $slides->image   =$request->Image->store('public/slide');
        $slides->content = $request->Content;
        $slides->link = $request->input('Link');
        $slides->save();
        Session::flash('success', 'Successful Slide add');
        return redirect()->route('slide.list');
    }

    public function edit($id){
        $slides = Slide::findOrFail($id);
        return view('admin.Slide.edit',compact('slides'));
    }
    public function update($id, Request $request){
        $slides          = Slide::findOrFail($id);
        $slides->name = $request->input('Name');
        $slides->image=$this-> UpdateUpload($id, $request);
        $slides->content = $request->Content;
        $slides->link = $request->input('Link');
        $slides->save();
        Session::flash('success', 'Successful slide update');
        return redirect()->route('slide.list');

    }
    public function UpdateUpload($id,$request){
        $slides= Slide::findOrFail($id);
        if($request->hasFile('Image')){
            $img = $request->image;
            $path = $img->store('public/slide');
            return $path;
        } else {
            return $slides->image;
        }
    }
    public function destroy($id){
        $slides = Slide::findOrFail($id);
        $slides->delete();
        Session::flash('success', 'Successful slide delete');
        return redirect()->route('slide.list');
    }
}
