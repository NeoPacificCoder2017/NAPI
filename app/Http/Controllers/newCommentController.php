<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newComment;

class newCommentController extends Controller
{
    //
    public function all(){

        $comment = newComment::all();
        
        dump($comment);
        return view('comments.comment');
    }

    public function show($commentId) {

        $comment = newComment::find($commentId);
        dump($comment);

        return view('comments.comment');
    }

    public function new(){
        return view('comments.comment-form');
    }

    public function create(Request $request){
        $input = $request->all();
        
        $comment = new newComment();
        $comment->new_id = $input['new_id'];
        $comment->user_id = $input['user_id'];
        $comment->comment = $input['comment'];
        $comment->save();
        

    }
}
