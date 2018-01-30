@extends('layouts.app')

@section('content')
    <br>
	<div class="col-sm-offset-3 col-sm-6">
		<div class="panel panel-success">
			<div class="panel-heading">Ajouter une nouvel actualité</div>
			<div class="panel-body"> 
				Merci. Votre actualié à bien été ajouté et est en cours de publication.
			</div>
			<div>
				<a href="{{ url('/home/news') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
			</div>
		</div>
	</div>
@endsection