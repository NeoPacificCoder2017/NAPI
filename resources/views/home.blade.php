@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading" style="text-align:center;">Bienvenue sur Napi {{ Auth::User()->pseudo }}</div>
                    <div class="panel-body">
                        <div class="panel-heading"><a href="home/news">Voir les actualité publier</a><br/></div>
                        <div class="panel-heading"><a href="home/news/new">Créer une nouvel actualité</a><br/></div>
                        <div class="panel-heading"><a href="home/users">Voir tous les utilisateurs</a></div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
