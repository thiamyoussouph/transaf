@extends('layouts.master')

@section('content')



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Liste des Chauffeurs</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">adress</th>
                        <th scope="col">telephone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                {{-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> --}}
                <tbody>
                    @foreach ($chauffeurs as $chauffeur)
                    <tr>
                        <td>{{$chauffeur->nom}}</td>
                        <td>{{$chauffeur->prenom}}</td>
                        <td>{{$chauffeur->telephone}}</td>
                        <td>{{$chauffeur->adresse}}</td>

                        <td class="d-flex">

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


