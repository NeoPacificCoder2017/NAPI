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

    // public function getAllActivated(){
    //     $comments = newComment::all()->where('actvated',1);
    //     return view('comments, comment',['comments'=>$comment]);

    // }

    // public function getAllNoActivated(){
    //     $comments = newComment::all()->where('actvated',0);
    //     return view('comments, comment',['comments'=>$comment]);

    // }

    public function show($commentId) {

        $comments = newComment::find($commentId);
        dump($comments);

        return view('comments.Comment',['comments'=>$comments]);
    }

    public function new(){
        return view('comments.Comment-form');
    }

    public function edit(){
        $input = $request->all();
        
        $comments = new newComment();
        $comments->new_id = $input['new_id'];
        $comments->user_id = $input['user_id'];
        $comments->comment = $input['comment'];
        $comments->save();
        return view('comments.Comment-form',['comments'=>$comments]);
    }

    public function create(Request $request){
        $input = $request->all();
        
        $comments = new newComment();
        $comments->new_id = $input['new_id'];
        $comments->user_id = $input['user_id'];
        $comments->comment = $input['comment'];
        $comments->save();
        
        return view('comments.Comment-create-confirmation');
    }
    public function destroy($commentId){
        $comments = newComment::find($commentId);
        $comments ->delete();
        return view('comments.Comment-delete');
    }
}
