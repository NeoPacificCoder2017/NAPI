@extends('template')

@section('contenu')
<div class="container"> 
  <h2 class="text-center pt-3">NAPI-Liste des commentaires</h2>
  <div class="row justify-content-center">
	  <div class="col-10 col-md6">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>check</th>
            <th>#id</th>
            <th>#new</th>
            <th>#user</th>
            <th>Commentaire</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($comments AS $comment)
            <tr>
              <td><input type="checkbox" name="checkbox"/></td>
              <td>#{{ $comment->id }}</td>
              <td>{{ $comment->new_id }}</td>
              <td>{{ $comment->user_id }}</td>
              <td>{{ $comment->comment }}</td>
              <td>
              
                
            </tr>
          @endforeach
          <a href="comments/new" class="btn btn-success right btn-sm m-3">Nouveau commentaire</a>
          <div class="btn-group">
            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Action
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          {{--  <button action="comments/new" type="button" class="btn btn-default navbar-btn m-3">ajouter un commantaire</button>  --}}
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection