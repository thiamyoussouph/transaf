@extends('layouts.app')

@section('content')
    <div class="col-md-10">
        <div class="card">
            <div class="card-header ">
                <h3 class="card-title m-0">Affecter Camion</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('chauffeur_Camion.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-5">
                                <label for="heure" class="form-label">Choisir Un Camion</label>
                                <select class="form-select w-100 border-secondary border-2" aria-label="Default select example" name="camion_id">
                                    <option selected>Camions</option>
                                    @foreach ($camions as $camion)
                                        <option value="{{ $camion->id }}">{{ $camion->matricule }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                                <div class="mb-5">
                                    <div class="mb-5">
                                        <label for="heure" class="form-label">Choisir Un Chauffeur</label>
                                        <select class="form-select w-100 border-secondary border-2" aria-label="Default select example" name="chauffeur_id">
                                            <option selected>Chauffeurs</option>
                                            @foreach ($chauffeurs as $chauffeur)
                                                <option value="{{ $chauffeur->id }}">{{ $chauffeur->prenom }} {{ $chauffeur->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                   
                                </div>
                            </div>
                                <div class="mb-3 d-flex justify-content-center w-100">
                                    <button type="submit" class="btn btn-primary">Affecter</button>
                                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
