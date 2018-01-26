@extends('news.template')

@section('contenu')
@foreach($news AS $new)
  <div class="container">
    <div class="row">
      <div class="col-lg-offset-3 col-lg-8">
        <div class="card text-white bg-info mb-5" style="max-width: 400px;">
          <div class="card-header">Titre : {{ $new->title }}</div>
            <div class="card-body">
              <h4 class=" card-title">Sous-titre :{{ $new->subtitle }}</h4>
              <h5 class=" card-title">User_id : {{ $new->user_id }}</h5>
              <h5 class=" card-title">Categorie : {{ $new->category_id }}</h5>
              <h5 class=" card-title">Publier : {{ $new->publish }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $new->content }}</p>
            </div> 

            <div>
               <a href="news/{{$new->id}}/edit" button class="btn btn-success btn-small btn-detail">Edit</a>
                  <a href="news/{{$new->id}}/delete" button class="btn btn-danger btn-small btn-delete">Delete</a>
            </div> 
        </div>
    </div>
  </div>
@endforeach
@endsection