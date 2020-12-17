<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessiondata(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo 'nodata session';
        }

    }
    public function storeSessiondata(Request $request){
        $request->session()->put('name','jenifer');
        echo 'Data has been added to the session';
    }
    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo 'Data has been removed from the session';
    }
}
