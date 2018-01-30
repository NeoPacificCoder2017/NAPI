@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="col-lg-10">
        <div class="panel panel-info">
          <div class="panel-heading">Catégorie : {{ $news->category_id }}
             @if ($user->id == $news->user_id || $user->profile_type_id == 1 )  <a href="{{$news->id}}/delete" button class="btn btn-danger btn-small pull-right">Supprimer</a>@endif
             @if ($user->id == $news->user_id || $user->profile_type_id == 1 )  <a href="{{$news->id}}/edit" button class="btn btn-success btn-small pull-right">Editer</a>@endif
            <a href="{{ url('/home/news') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
          </div>
            <div class="panel-body">
            <img src="{{ asset('image/' . $news->picture)}}"/>
              <h2>Titre :{{ $news->title }}</h2>
              <h4>Sous-titre : {{ $news->subtitle }}</h4>
              <h4>Poster par : {{ $user->lastname}} {{ $user->firstname }}</h4>
              <h4>Le : {{ $news->created_at}}</h4>
            </div>
            <div class="panel-body">
              <p class="card-text">{{ $news->content }}</p>
              <a href="#" button class="btn btn-success btn-small pull-right" >Commenter</a>
            </div> 
        </div>
        <div class="col-lg-10">
        <div class="panel panel-primary">
        <div class="panel-info">
            <div class="panel-body">
            <h4>Pseudo : Yves</h4>
            <h4>Poster : 15/08/2016</h4>
              <p class="card-text">zcmnmznczqenceznunzecnefjnmzjefnmzejfnzjefnmzenfze
              ezfmleznfmleznfzenflzenfzenfzenfzenfzefnzlenflzenfmlzenfnzefmnzelmfn
              fzefnzmenfmzenfzlmenfzmefnmzejnfmzefnzefnzefnzlefmzenfzlmenfmzelfn
              efzelfnzmefnzmefnzmefnzmnefzemnfmzenfmzenf</p>
            </div> 
           </div>
           </div>
           </div>

           <div class="col-lg-10">
        <div class="panel panel-primary">
        <div class="panel-info">
            <div class="panel-body">
            <h4>Pseudo : Teiva</h4>
            <h4>Poster : 18/08/2016</h4>
              <p class="card-text">zcmnmznczqenceznunzecnefjnmzjefnmzejfnzjefnmzenfze
              ezfmleznfmleznfzenflzenfzenfzenfzenfzefnzlenflzenfmlzenfnzefmnzelmfn
              fzefnzmenfmzenfzlmenfzmefnmzejnfmzefnzefnzefnzlefmzenfzlmenfmzelfn
              efzelfnzmefnzmefnzmefnzmnefzemnfmzenfmzenf</p>
            </div> 
           </div>
           </div>
           </div>  

           <div class="col-lg-10">
        <div class="panel panel-primary">
        <div class="panel-info">
            <div class="panel-body">
            <h4>Pseudo : LOLO</h4>
            <h4>Poster : 25/08/2016</h4>
              <p class="card-text">zcmnmznczqenceznunzecnefjnmzjefnmzejfnzjefnmzenfze
              ezfmleznfmleznfzenflzenfzenfzenfzenfzefnzlenflzenfmlzenfnzefmnzelmfn
              fzefnzmenfmzenfzlmenfzmefnmzejnfmzefnzefnzefnzlefmzenfzlmenfmzelfn
              efzelfnzmefnzmefnzmefnzmnefzemnfmzenfmzenf</p>
            </div> 
           </div>
           </div>
           </div>  

           <div class="col-lg-10">
        <div class="panel panel-primary">
        <div class="panel-info">
            <div class="panel-body">
            <h4>Pseudo : Teiva</h4>
            <h4>Poster : 04/02/2017</h4>
              <p class="card-text">zcmnmznczqenceznunzecnefjnmzjefnmzejfnzjefnmzenfze
              ezfmleznfmleznfzenflzenfzenfzenfzenfzefnzlenflzenfmlzenfnzefmnzelmfn
              fzefnzmenfmzenfzlmenfzmefnmzejnfmzefnzefnzefnzlefmzenfzlmenfmzelfn
              efzelfnzmefnzmefnzmefnzmnefzemnfmzenfmzenf</p>
            </div> 
           </div>
           </div>
           </div>  
    </div>
@endsection