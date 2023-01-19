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
                                <th scope="col">numeromouvement</th>
                                <th scope="col">Description</th>
                                <th scope="col">Camion</th>
                                <th scope="col">Categorie</th>
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
                            @foreach ($Mouvement as $mouvement)
                            <tr>
                                <td>{{$mouvement->numeromouvement}}</td>
                                <td>{{$mouvement->description}}</td>
                                <td>{{$mouvement->camion->matricule}}</td>
                                <td>{{$mouvement->categorie->libelle}}</td>
                                <td>
                                    {{-- <a href="#"><i class="bi bi-plus-circle" style="color: #03ECC7;"></i></a> --}}
                                    <a href="#"><i class="bi bi-pencil-square" style="color:#FFEF00;"></i></a>
                                    <a href="{{route('mouvement.destroy',['id'=>$mouvement->id])}}"> <i class="bi bi-x-circle" style="color:#E40000;"></i></a>
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