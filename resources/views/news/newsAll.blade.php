@extends('layouts.app')

@section('content')
@foreach($news AS $new)
  <div class="container">
  {{--  @if (\Session::has('success'))
     <div class="alert alert-success">
       <p>{{ \Session::get('success') }}</p>
     </div><br />
    @endif  --}}
      <div class="col-lg-offset-3 col-lg-8">
        <div class="panel panel-info">
          <div class="panel-heading">Catégorie : {{ $new->categorie }}
            @if ($user->id == $new->user_id) <a href="news/{{$new->id}}/delete" button class="btn btn-danger btn-small pull-right">Supprimer</a> @endif
             @if ($user->id == $new->user_id) <a href="news/{{$new->id}}/edit" button class="btn btn-success btn-small pull-right">Editer</a> @endif
            <a href="news/{{$new->id}}" button class="btn btn-primary btn-small pull-right">Lire</a>

          </div>
            <div class="panel-body">
              <img src="{{ asset('image/' . $new->picture)}}"/>
              <h2>Titre :{{ $new->title }}</h2>
              <h4>Sous-titre : {{ $new->subtitle }}</h4>
              <h4>Pseudo : {{ $user->pseudo }}</h4>
              <h4>Poster le : {{ $new->created_at}}</h4>
              {{--  <h4>Publier : {{ $new->publish }}</h4>  --}}
            </div>
            {{--  <div class="panel-body">
              <p class="card-text">{{ $new->content }}</p>
            </div>   --}}
        </div>
    </div>
@endforeach
@endsection