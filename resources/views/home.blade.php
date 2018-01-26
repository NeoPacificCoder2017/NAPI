@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenue sur Napi cher {{ Auth::User()->lastname }}</div>
                <div class="panel-body">
                    <a href="user/new">Créer une nouvel actualité</a><br/>
                    <a href="users">Voir les actualité</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
