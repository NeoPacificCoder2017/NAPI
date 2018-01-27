@extends('layouts.app')

@section('content')
<div class="col-sm-offset-4 col-sm-5">
	<div class="panel panel-info">
    <div class="panel-heading">Commentaire</div>
      <div class="panel-body">
      {!! Form::open(['url' => 'home/news']) !!}
      <label>news_id</label>{!! Form::text('new_id', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
      <label>pseudo_id</label>{!! Form::text('user_id', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
      <label>votre commentaire</label>{!! Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => '']) !!}<br/>
        {!! Form::submit('Envoyer !', ['class' => 'btn btn-success pull-right']) !!}<br/>
      {!! Form::close() !!}
    </div>
</div>
@endsection