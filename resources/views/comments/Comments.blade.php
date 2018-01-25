@extends('template')

@section('contenu')
<h2 class="text-center">NAPI-Les commentaires</h2>
  <div class="col-sm-offset-3 col-sm-6">
	  <div class="panel panel-body">
      <table class="table">
        <thead>
          <tr>
            <th>check</th>
            <th>#id</th>
            <th>new</th>
            <th>user</th>
            <th>comment</th>
            
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
              
                
            </tr>
          @endforeach
          <a href="comments/new" button class="btn btn-success pull-right btn-small"></a>
          {{--  <button action="comments/new" type="button" class="btn btn-default navbar-btn">ajouter un commantaire</button>  --}}
        </tbody>
      </table>
    </div>
  </div>
@endsection