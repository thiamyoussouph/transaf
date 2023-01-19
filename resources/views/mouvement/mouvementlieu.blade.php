@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xs-12 col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste Mouvements</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th colspan="2" class="border-0"></th>
                                <th colspan="3">Chargement</th>
                                <th colspan="3">Déchargement</th>
                            </tr>
                            
                            <tr>
                            
                                <th scope="col">N°mouvement</th>
                                <th scope="col">Matricule </th>
                                <th scope="col">Quantité </th>
                                <th scope="col">Date </th>

                                <th scope="col">Responsable </th>
                                
                               
                                <th scope="col">Date </th>
                                <th scope="col">Quantité </th>
                               
                     


                                <th scope="col">Responsable </th>
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
                            @foreach ( $mouvements as $mouvement)
                            <tr>
                                <td>{{$mouvement->numeromouvement}}</td>
                                <td>{{$mouvement->camion->matricule}}</td>
                                <td>{{$mouvement->chargement->quantite}}</td>
                                <td>{{$mouvement->created_at}}</td>
                                <td>{{$mouvement->chargement->user->first_name}} {{$mouvement->chargement->user->last_name}}</td>
                                
                                @if($mouvement->decharger==false)
                                <td style="color: #E40000;">En Cours</td>
                                <td style="color: #E40000;">En Cours</td>
                                <td style="color: #E40000;">En Cours</td>
                                @else
                               
                                <td>{{$mouvement->dechargement->quantite}}</td>
                                <td>{{$mouvement->updated_at}}</td>
                                <td>{{$mouvement->dechargement->user->first_name}} {{$mouvement->chargement->user->last_name}}
                                @endif
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
    </div>
</div>


@endsection