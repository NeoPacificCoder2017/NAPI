@extends('users.template')
@extends('layouts.app')

@section('contenu')
  <div class="container">
    <div class="col-sm-12">
	  <div class="panel panel-info">
    <h2>NAPI-Les utilisateurs</h2>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>ID</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Pseudo</th>
            <th>Profile_type_id</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users AS $user)
            <tr>
              <td><input type="checkbox" name="checkbox"/></td>
              <td>#{{ $user->id }}</td>
              <td>{{ $user->lastname }}</td>
              <td>{{ $user->firstname }}</td>
              <td>{{ $user->pseudo }}</td>
              <td>{{ $user->profile_type_id }}</td>
              <td>{{ $user->birthday }}</td>
              <td>{{ $user->email }}</td>
              {{--  <td>{{ $profile_type->name }}</td>  --}}
                <td>
                  <a href="user/{{$user->id}}/edit" button class="btn btn-success btn-small btn-detail">Edit</a>
                  <a href="user/{{$user->id}}/delete" button class="btn btn-danger btn-small btn-delete">Delete</a>
                </td>
            </tr>
          @endforeach
          <a href="user/new" button class="btn btn-success pull-right btn-small">Nouvel utilisateur</a>
        </tbody>
      </table>
    </div>
  </div>
  </div>
@endsection