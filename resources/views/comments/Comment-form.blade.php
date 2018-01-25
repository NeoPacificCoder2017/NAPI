@extends('template')

@section('contenu')
<div class="container"> 
    <h2 class="text-center p-4">Nouveau commentaire</h2>
    <div class="row justify-content-center p-3">
        <div class="col-4 col-md6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text btn-primary" for="inputGroupSelect01">News</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    
                        <option value="">{{ $comments->new_id }}</option>
                    
                </select>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-3">
        <div class="col-6 col-md6">
            <h5>Commentaire</h5>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea">{{ $comments->comment }}</textarea>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-5">
        <a href="comments/create" class="btn btn-success m-3 float-right">Ajouter</a>
    </div>
</div>
@endsection