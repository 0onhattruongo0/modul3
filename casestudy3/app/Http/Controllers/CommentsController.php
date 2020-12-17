<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{
//    public function destroy($id){
//        $comment = Comments::findOrFail($id);
//        $comment->delete();
//        Session::flash('success', 'Successful category delete');
//        return back();
//
//    }

    public function destroy($id)
    {   //For Deleting Users
        $comment = new Comments;
        $comment = Comments::find($id);
        $comment->delete($id);
        Session::flash('success', 'Successful comment delete');
        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);
    }
}
