@extends('layouts.master')

@section('content')

<div class="col-md-6">
    <div class="card">
        <div class="card-header ">
            <h3 class="card-title m-0">Ajoute chauffeur</h3>
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
                <div class="mb-3">
                    <label for="nom" class="form-label">nom</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">prenom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label">telephone</label>
                    <input type="text" class="form-control" id="telephone" name="telephone">
                </div>
                <div class="mb-3">
                    <label for="CNI" class="form-label">CNI</label>
                    <input type="text" class="form-control" id="CNI" name="CNI">
                </div>
                <div class="mb-3">
                    <label for="adresse" class="form-label">adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection