@extends('layouts.master')

@section('content')

<table class="table table-info table-striped">
    <thead>
        <tr>
            <th scope="col">Matricule</th>
            <th scope="col">Marque</th>
            <th scope="col">Volume</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Camions as $camion)
        <tr>
            <td>{{$camion->matricule}}</td>
            <td>{{$camion->marque}}</td>
            <td>{{$camion->volume}}</td>
  
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
