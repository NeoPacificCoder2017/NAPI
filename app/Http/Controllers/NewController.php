<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\NewResource as NewResources;
use App\NewActu;
use App\Categories;

class NewController extends Controller
{
//   public function __construct()
//   {
//       $this->middleware('auth');
//   }

  public function APIall(){
    $users = NewActu::paginate(15); 
   return NewResources::collection($users);
   
}

/** Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function APIshow($id)
{
$news = NewActu::findOrFail($id);
return new NewResources($news);
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function APIstore(Request $request)
{
$news = $request->isMethod('put') ? NewActu::findOrFail
($request->new_actus_id) : new NewActu;

$news->id = $request->input('new_actus_id');
$news->title = $request->input('tittle');
$news->subtitle = $request->input('subtitle');
$news->categorie = $request->input('categorie');
$news->content = $request->input('content');
$news->picture = $request->input('picture');
$news->created_at = $request->input('created_at');

if($news->save()){
    return new NewResources($news);
}
}

public function APIdestroy($id)
{
$news = NewActu::findOrFail($id);
if($news->delete()){
return new NewResources($news);
}
}


//////////////////////////////////////////////////////////////////////Partie pour affichage HTML///////////////////////////////////////////////////////////////////////
    public function all(){
        $user = Auth::user();
        $category = Auth::user();
        $news = NewActu::all();
        return view('news.newsAll', ['news' => $news,'user' => $user, 'category' => $category]);
  
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
        $news ->category_id = Auth::id();
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
