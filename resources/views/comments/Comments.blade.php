@extends('template')

@section('contenu')
<h2>NAPI-Les commentaires</h2>
  <div class="col-sm-offset-3 col-sm-6">
	  <div class="panel panel-info">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>new</th>
            <th>pseudo</th>
            <th>comment</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($comments AS $comment)
            <tr>
              <td><input type="checkbox" name="checkbox"/></td>
              <td>#{{ $comment->id }}</td>
              <td>{{ $comment->new_id }}</td>
              <td>{{ $comment->pseudo }}</td>
              <td>{{ $comment->comment }}</td>
              
                
            </tr>
          @endforeach
          <a href="comments/new" button class="btn btn-success pull-right btn-small"></a>
        </tbody>
      </table>
    </div>
  </div>
@endsection