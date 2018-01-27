@extends('users.template')
@extends('layouts.app')

@section('contenu')
    <br>
	<div class="col-sm-offset-3 col-sm-8">
		<div class="panel panel-success">
			<div class="panel-heading">Ajouter un nouvel utilisateur</div>
			<div class="panel-body"> 
				Merci. Votre compte à bien été ajouté.
			</div>
			<div>
				<a href="{{ url('/home/users') }}" button class="btn btn-primary btn-small pull-right">Retour</a>
			</div>
		</div>
	</div>
@endsection
