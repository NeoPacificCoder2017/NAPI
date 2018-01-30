<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentTable extends Controller
{
    public function __construct()
  {
      $this->middleware('auth');
  }


    public function all(){
        $user = Auth::user();
        $news = NewActu::user();
        $comments = Comment::all();
        return view('comments.comments', ['comment' => $comments, 'new' => $news,'user' => $user]);
  
    }

    public function show($newsId){
        $user = Auth::user();
        $news = NewActu::user();
        $comments = Comment::find($newsId);
        return view('comments.comment', ['comment' => $comments, 'news' => $news,'user' => $user]);
    }

    public function new(){
        return view('comments.comment-form');
    }

    public function create(Request $request){
        $input = $request->all();
        $comments = new Comment();
        $comments ->user_id = Auth::id();
        $comments ->new_id = Auth::id();
        $comments ->content = $input['content'];
        $comments ->save();

        // return back('news.news')->with('success', 'News has been added');
        return view('comments.comment-create-confirmation');
    }

    // public function destroy($newsId){
    //     $comments = Comment::find($newsId);
    //     $comments ->delete();
    //     return view('comments.comment-delete');
    // }

    // public function edit($newsId){
    //     $comments = Comment::find($newsId);
    //     return view('comments.comment-form', ['comment' => $comments]);
    // }
}
