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
                                <th scope="col">N°mouvement</th>
                                <th scope="col">qt charger</th>
                                <th scope="col">date erg</th>

                                <th scope="col">res char</th>
                                <th scope="col">mt camion</th>
                               
                                <th scope="col">date dch</th>
                                <th scope="col">qt decharger</th>
                                <th scope="col">date dchrd</th>
                     


                                <th scope="col">res dech</th>
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
                                <td>{{$mouvement->chargement->quantite}}</td>
                                <td>{{$mouvement->created_at}}</td>
                                <td>{{$mouvement->chargement->user->name}}</td>
                                <td>{{$mouvement->camion->matricule}}</td>
                                <td>{{$mouvement->created_at}}</td>
                                @if($mouvement->decharger==false)
                                <td style="color: #E40000;">encour</td>
                                <td style="color: #E40000;">encour</td>
                                <td style="color: #E40000;">pas decharger</td>
                                @else
                               
                                <td>{{$mouvement->dechargement->quantite}}</td>
                                <td>{{$mouvement->updated_at}}</td>
                                <td>{{$mouvement->dechargement->user->name}}
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