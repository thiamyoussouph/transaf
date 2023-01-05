@extends('layouts.master')

@section('content')

<div class="col-md-10">
    <div class="card">
        <div class="card-header ">
            <h3 class="card-title m-0">Ajoute mouvement</h3>
        </div>
        <div class="card-body">
            <form action="{{route('mouvement.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">


                        <div class="mb-3">
                            <label for="date" class="form-label">numero mouvement</label>
                            <input type="numero" class="form-control" id="date" name="numeromouvement">
                        </div>
                        <div class="mb-3">
                            <label for="heure" class="form-label">heure</label>
                            <input type="time" class="form-control" id="heure" name="heure">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">description</label>
                            <input type="text" class="form-control" id="type" name="description">
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="quantite" class="form-label">quantite</label>
                            <input type="number" class="form-control" id="quantite" name="quantite">
                        </div>
                        <div class="mb-3">
                            <div class="mb-5">
                                <select class="form-select" aria-label="Default select example" name="camion_id">
                                    <option selected>cammions</option>
                                    @foreach($camions as $camion)
                                    <option value="{{$camion->id}}">{{$camion->matricule}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-5">
                                <div class="mb-5">
                                    <select class="form-select" aria-label="Default select example" name="categorie_id">
                                        <option selected>categorie</option>
                                        @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-5">
                                    <select class="form-select" aria-label="Default select example" name="user_id">
                                        <option selected>Utilities</option>
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->prenom}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary" style="width: 90%;">Ajouter</button>
                                </div>
                            </div>
                        </div>
            </form>
        </div>
    </div>
</div>
@endsection