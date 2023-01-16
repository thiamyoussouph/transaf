@extends('layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Liste Des Chauffeurs</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Adresse</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($chauffeurs as $chauffeur)
        <tr>
            <td>{{$chauffeur->nom}}</td>
            <td>{{$chauffeur->prenom}}</td>
            <td>{{$chauffeur->telephone}}</td>
            <td>{{$chauffeur->adresse}}</td>

            <td class="d-flex">
                {{-- <a href="{{route('camion.detail',['id'=> $camion -> id])    }}"><i class="bi bi-plus-circle" style="color: #03ECC7;"></i></a> --}}
                <a href="#"><i class="bi bi-pencil-square" style="color:green; padding:2%; "></i></a>
                <a href=""> <i class="bi bi-x-circle" style="color:#E40000;"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>


@endsection