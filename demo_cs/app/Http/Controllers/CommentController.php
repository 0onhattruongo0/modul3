<?php

namespace App\Http\Controllers;

use App\Models\Commentss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function destroy($id){
        $comment = Commentss::findOrFail($id);
        $comment->delete();
//        Session::flash('success', 'Successful category delete');
        return back();
    }
}
