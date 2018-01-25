@extends('news.template')

@section('contenu')
<div class="col-sm-offset-4 col-sm-3">
	<div class="panel panel-info">
    <div class="panel-heading">Ajouter un nouvel utilisateur</div>
      <div class="panel-body">
      {!! Form::open(['url' => 'user']) !!}
      <label>Pseudo</label>{!! Form::text('lastname', null, ['class' => 'form-control', 'placeholder' => 'nom']) !!}<br/>
      <label>titre</label>{!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'prénom']) !!}<br/>
      <label>soustitre</label>{!! Form::text('pseudo', null, ['class' => 'form-control', 'placeholder' => 'pseudo']) !!}<br/>
      <label>categorie</label>{!! Form::text('profile_type_id', null, ['class' => 'form-control', 'placeholder' => '4']) !!}<br/>
      <label>votre actualité</label>{!! Form::textarae('birthday', null, ['class' => 'form-control', 'placeholder' => 'AAAA-MM-JJ']) !!}<br/>
      <label>photo</label>{!! Form::file('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}<br/>
      <label>publier</label>{!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'mot de passe']) !!}<br/>
      <label>publier par</label>{!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'mot de passe']) !!}<br/>
        {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
      {!! Form::close() !!}
    </div>
</div>
@endsection