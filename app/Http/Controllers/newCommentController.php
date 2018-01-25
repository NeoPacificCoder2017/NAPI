<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\newComment;

class newCommentController extends Controller
{
    //
    public function all(){

        $comments = newComment::all();
        
        
        return view('comments.Comments',['comments' => $comments]);
    }

    public function show($commentId) {

        $comments = newComment::find($commentId);
        dump($comments);

        return view('comments.comment');
    }

    public function new(){
        return view('comments.comment-form');
    }

    public function create(Request $request){
        $input = $request->all();
        
        $comments = new newComment();
        $comments->new_id = $input['new_id'];
        $comments->user_id = $input['user_id'];
        $comments->comment = $input['comment'];
        $comments->save();
        

    }
}
