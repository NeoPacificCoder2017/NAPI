@extends('layouts.app')

@section('content')
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-danger">
			<div class="panel-heading">Supprimer une atualitée</div>
			<div class="panel-body"> 
				Merci! L'actualité à bien été supprimer.
			</div>
			<div>
				<a href="{{ url('/home/news') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
			</div>
		</div>
	</div>
@endsection