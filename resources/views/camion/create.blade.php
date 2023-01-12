@extends('layouts.app')
@section('content')
<div class="full_container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">
                    <h3 class="card-title m-2">Ajouter un camion</h3>
                </div>
                <div class="card-body">

                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                @endif
                    <form action="{{route('camion.store')}}"  method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="matricule" class="form-label">Matricule</label>
                            <input type="text" class="form-control" id="matricule" aria-describedby="emailHelp" name="matricule">

                        </div>
                        <div class="mb-3">
                            <label for="marque" class="form-label">marque</label>
                            <input type="text" class="form-control" id="marque" name="marque">
                        </div>
                        <div class="mb-3 ">
                            <label for="volume" class="form-label">volume</label>
                            <input type="number" class="form-control" id="volume" name="volume">
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection