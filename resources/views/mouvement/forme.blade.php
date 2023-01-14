@extends('layouts.app')

@section('content')
    <div class="col-md-10">
        <div class="card">
            <div class="card-header ">
                <h3 class="card-title m-0">Ajouter mouvement</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('mouvement.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">

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
                        </div>
                        <div class="col-6">
                            <div class="mb-5">
                                <label for="heure" class="form-label">camion</label>
                                <select class="form-select w-100 border-secondary border-2" aria-label="Default select example" name="camion_id">
                                    <option selected>cammions</option>
                                    @foreach ($camions as $camion)
                                        <option value="{{ $camion->id }}">{{ $camion->matricule }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                                <div class="mb-5">
                                    <div class="mb-5">
                                        <label for="heure" class="form-label">categorie</label>
                                        <select class="form-select w-100 border-secondary border-2" aria-label="Default select example" name="categorie_id">
                                            <option selected>categorie</option>
                                            @foreach ($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-5">
                                        <div class="mb-3" style="display: none;">
                                            <label for="type" class="form-label"></label>
                                            <input type="text" class="form-control" id="type"
                                                value="{{ Auth::user()->id }}" name="user_id">
                                        </div>


                                    </div>
                                   
                                </div>
                            </div>
                                <div class="mb-3 d-flex justify-content-center w-100">
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
