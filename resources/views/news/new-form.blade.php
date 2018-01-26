@extends('news.template')

@section('contenu')
<div class="col-sm-offset-4 col-sm-5">
	<div class="panel panel-info">
    <div class="panel-heading">Ajouter un nouvel utilisateur</div>
      <div class="panel-body">
      {!! Form::open(['url' => 'new']) !!}
      <label>Pseudo</label>{!! Form::text('pseudo_id', null, ['class' => 'form-control', 'placeholder' => 'pseudo']) !!}<br/>
      <label>titre</label>{!! Form::text('firstname', null, ['class' => 'form-control', 'placeholder' => 'titre']) !!}<br/>
      <label>sous-titre</label>{!! Form::text('pseudo', null, ['class' => 'form-control', 'placeholder' => 'sous-titre']) !!}<br/>
      <label>categorie</label>{!! Form::number('profile_type_id', null, ['class' => 'form-control', 'placeholder' => '1']) !!}<br/>
      <label>votre actualité</label>{!! Form::textarea('birthday', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
      <label>image</label>{!! Form::file('email', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
      <label>publier</label>{!! Form::number('password', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
      <label>publier par</label>{!! Form::number('password', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
        {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
      {!! Form::close() !!}
    </div>
</div>
@endsection