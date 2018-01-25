@extends('users.template')

@section('contenu')
<div class="col-sm-offset-3 col-sm-6">
	<div class="panel panel-info">
    <div class="panel-heading">Ajouter un nouvel utilisateur</div>
      <div class="panel-body">
      {!! Form::open(['url' => 'user']) !!}
        {!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}<br/>
        {!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}<br/>
        {!! Form::text('pseudo', null, ['class' => 'form-control', 'placeholder' => 'Votre pseudo']) !!}<br/>
        {!! Form::text('profile_type_id', null, ['class' => 'form-control', 'placeholder' => '4']) !!}<br/>
        {!! Form::text('birthday', null, ['class' => 'form-control', 'placeholder' => 'Votre date de naissance']) !!}<br/>
        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}<br/>
        {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Votre mot de passe']) !!}<br/>
        {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
      {!! Form::close() !!}
    </div>
</div>
@endsection