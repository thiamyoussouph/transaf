@extends('layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Liste Des Camions Affectés au Chauffeurs</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        
                        <th scope="col">Prenom</th>
                        <th scope="col">Matricule</th>
                        <th scope="col">Date Affectation</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
               
                <tbody>
                    @foreach ( $chauffeur_Cammions as $chauffeur_Cammion)
                    <tr>
                        
                        <td>{{$chauffeur_Cammion->chauffeur_id}}</td>
                        <td>{{$chauffeur_Cammion->camion_id}}</td>
                        <td>{{$chauffeur_Cammion->created_at}}</td>
<td>
                            {{-- <a href="#"><i class="bi bi-plus-circle" style="color: #03ECC7;"></i></a> --}}
                            <a href="#"><i class="bi bi-pencil-square" style="color:#FFEF00;"></i></a>
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