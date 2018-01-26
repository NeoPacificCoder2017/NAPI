<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewActu;

class NewController extends Controller
{
  // public function __construct()
  // {
  //     $this->middleware('auth');
  // }


    public function all(){
        $news = NewActu::all();
        return view('news.news', ['news' => $news]);
  
    }

    public function show($newsId){
        $news = NewActu::find($newsId);
        return view('news.new');
    }

    public function new(){
        return view('news.new-form');
    }

    public function create(Request $request){
        $input = $request->all();
        $news = new NewActu();
        $news ->user_id = $input['user_id'];
        $news ->title = $input['title'];
        $news ->subtitle = $input['subtitle'];
        $news ->category_id = $input['category_id'];
        $news ->content = $input['content'];
        $news ->picture = $input['picture'];
        $news ->publish = $input['publish'];
        $news ->published_by = $input['published_by'];
        $news ->save();

        return view('news.new-create-confirmation');
    }

    public function destroy($newsId){
        $news = NewActu::find($newsId);
        $news ->delete();
        return view('news.news-delete');
    }
}
