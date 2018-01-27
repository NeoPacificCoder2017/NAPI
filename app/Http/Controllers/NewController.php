<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\NewActu;

class NewController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }


    public function all(){
        $user = Auth::user();
        $news = NewActu::all();
        return view('news.newsAll', ['news' => $news,'user' => $user]);
  
    }

    public function show($newsId){
        $user = Auth::user();
        $news = NewActu::find($newsId);
        return view('news.new', ['news' => $news,'user' => $user]);
    }

    public function new(){
        return view('news.new-form');
    }

    public function create(Request $request){
        $input = $request->all();
        $news = new NewActu();
        $news ->user_id = Auth::id();
        $news ->title = $input['title'];
        $news ->subtitle = $input['subtitle'];
        $news ->categorie = $input['categorie'];
        $news ->content = $input['content'];
        $news ->picture = $input['picture'];
        // $news ->publish = $input['publish'];
        // $news ->published_by = $input['published_by'];
        $news ->save();

        // return back('news.news')->with('success', 'News has been added');
        return view('news.new-create-confirmation');
    }

    public function destroy($newsId){
        $news = NewActu::find($newsId);
        $news ->delete();
        return view('news.new-delete');
    }

    public function edit($newsId){
        $news = NewActu::find($newsId);
        return view('news.new-form', ['news' => $news]);
    }
}
