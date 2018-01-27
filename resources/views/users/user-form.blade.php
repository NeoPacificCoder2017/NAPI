@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-offset-4 col-sm-5">
      <div class="panel panel-success">
        <div class="panel-heading">Ajouter un nouvel utilisateur</div>
          <div class="panel-body">
            {!! Form::open(['url' =>'/home/user']) !!}
            <label>Votre nom</label>{!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'nom']) !!}<br/>
            <label>Votre prenom</label>{!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'prénom']) !!}<br/>
            <label>Votre pseudo</label>{!! Form::text('pseudo', null, ['class' => 'form-control', 'placeholder' => 'pseudo']) !!}<br/>
            <label>Votre profileType</label>{!! Form::text('profile_type_id', null, ['class' => 'form-control', 'placeholder' => '4']) !!}<br/>
            <label>Votre date de naissance</label>{!! Form::text('birthday', null, ['class' => 'form-control', 'placeholder' => 'AAAA-MM-JJ']) !!}<br/>
            <label>Votre email</label>{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}<br/>
            <label>Votre mot de passe</label>{!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'mot de passe']) !!}<br/>
            {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
            {!! Form::close() !!}
          </div>
        </div>
    </div>
  </div>
@endsection