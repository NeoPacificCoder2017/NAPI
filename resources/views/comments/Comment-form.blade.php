@extends('template')

@section('contenu')
<div class="container"> 
  <h2 class="text-center pt-3">Nouveau commentaire</h2>
  <div class="row justify-content-center">
	  <div class="col-10 col-md6">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th>check</th>
            <th>#id</th>
            <th>new</th>
            <th>user</th>
            <th>Commentaire</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          {{--  @foreach($comments AS $comment)
            <tr>
              <td><input type="checkbox" name="checkbox"/></td>
              <td>#{{ $comment->id }}</td>
              <td>{{ $comment->new_id }}</td>
              <td>{{ $comment->user_id }}</td>
              <td>{{ $comment->comment }}</td>
              <td>
              
                
            </tr>
          @endforeach  --}}
          <a href="comments/new" class="btn btn-success right btn-sm m-3">News comments</a>
          {{--  <button action="comments/new" type="button" class="btn btn-default navbar-btn m-3">ajouter un commantaire</button>  --}}
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection