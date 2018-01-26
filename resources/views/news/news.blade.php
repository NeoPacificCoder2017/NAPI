@extends('news.template')

@section('contenu')
  <div class="container">
    <div class="col-sm-12">
	  <div class="panel panel-info">
    <h2>NAPI-Les actualitées</h2>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>user_id</th>
            <th>title</th>
            <th>subtitle</th>
            <th>catégory_id</th>
            <th>content</th>
            <th>picture</th>
            <th>publish</th>
            <th>published_by</th>
          </tr>
        </thead>
        <tbody>
          @foreach($news AS $new)
            <tr>
              <td><input type="checkbox" name="checkbox"/></td>
              <td>#{{ $new->id }}</td>
              <td>{{ $new->user_id }}</td>
              <td>{{ $new->title }}</td>
              <td>{{ $new->subtitle }}</td>
              <td>{{ $new->category_id }}</td>
              <td>{{ $new->content }}</td>
              <td>{{ $new->picture }}</td>
              <td>{{ $new->publish }}</td>
              <td>{{ $new->published_by }}</td>
                <td>
                  <a href="user/{{$new->id}}/edit" button class="btn btn-success btn-small btn-detail">Edit</a>
                  <a href="user/{{$new->id}}/delete" button class="btn btn-danger btn-small btn-delete">Delete</a>
                </td>
            </tr>
          @endforeach
          <a href="news/new" button class="btn btn-success pull-right btn-small">Nouvel utilisateur</a>
        </tbody>
      </table>
    </div>
  </div>
  </div>
@endsection