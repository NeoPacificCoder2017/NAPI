@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="col-lg-offset-3 col-lg-8">
        <div class="panel panel-info">
          <div class="panel-heading">Catégorie : {{ $news->categorie }}
            <a href="news/{{$news->id}}/delete" button class="btn btn-danger btn-small pull-right">Supprimer</a>
            <a href="news/{{$news->id}}/edit" button class="btn btn-success btn-small pull-right">Editer</a>
            <a href="{{ url('/home/news') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
          </div>
            <div class="panel-body">
            <img src="{{ asset('image/' . $news->picture)}}"/>
              <h2>Titre :{{ $news->title }}</h2>
              <h4>Sous-titre : {{ $news->subtitle }}</h4>
              <h4>Pseudo : {{ $news->pseudo }}</h4>
              {{--  <h4>Publier : {{ $news->publish }}</h4>  --}}
            </div>
            <div class="panel-body">
              <p class="card-text">{{ $news->content }}</p>
            </div> 
        </div>
    </div>
@endsection