@extends('layouts.app')

@section('content')
<div class="col-sm-offset-4 col-sm-5">
	<div class="panel panel-info">
    <div class="panel-heading">Une nouvel actualitée</div>
      <div class="panel-body">
      {!! Form::open(['url' => 'home/news']) !!}
      <label>Pseudo</label>{!! Form::text('pseudo', null, ['class' => 'form-control', 'placeholder' => 'pseudo']) !!}<br/>
      <label>titre</label>{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'titre']) !!}<br/>
      <label>sous-titre</label>{!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'sous-titre']) !!}<br/>
      <label>catégorie</label>{!! Form::text('categorie', null, ['class' => 'form-control', 'placeholder' => 'catégorie']) !!}<br/>
      <label>votre actualité</label>{!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
      <label>image</label>{!! Form::file('picture', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
      {{--  <label>publier</label>{!! Form::number('publish', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
      <label>publier par</label>{!! Form::number('published_by', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>  --}}
        {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
      {!! Form::close() !!}
    </div>
</div>
@endsection