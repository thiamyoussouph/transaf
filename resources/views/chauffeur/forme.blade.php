@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header ">
            <h3 class="card-title m-0">Ajouter Un chauffeur</h3>
        </div>
        <div class="card-body">
            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach
            @endif
            
            <form action="{{route('chauffeur.store')}}" method="POST">
                @csrf
                <div class="mb-1">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-1">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-1">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                </div>
                <div class="mb-1">
                    <label for="CIN" class="form-label">Carte D'Identité National</label>
                    <input type="text" class="form-control" id="CIN" name="CIN">
                </div>
                <div class="mb-1">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection