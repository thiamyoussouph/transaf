@extends('layouts.master')

@section('content')

<table class="table table-info table-striped">
    <thead>
        <tr>
            <th scope="col">nom</th>
            <th scope="col">prenom</th>
            <th scope="col">adress</th>
            <th scope="col">telephone</th>
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


@endsection