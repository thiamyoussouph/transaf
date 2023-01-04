@extends('layouts.master')

@section('content')

<div class="row">
    <div class="container">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <h6 class="m-0 font-weight-bold text-primary">Liste Camions</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Libelle</th>

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
                            {{-- <tbody>
                                @foreach ($Camions as $camion)
                                <tr>
                                    <td>{{$camion->matricule}}</td>
                                    <td>{{$camion->marque}}</td>
                                    <td>{{$camion->volume}}</td>
                                    <td>
                                        <a href="#"><i class="bi bi-plus-circle" style="color: #03ECC7;"></i></a>
                                        <a href="#"><i class="bi bi-pencil-square" style="color:#FFEF00;"></i></a>
                                        <a href="{{route('camion.destroy',['id'=>$camion->id])}}"> <i class="bi bi-x-circle" style="color:#E40000;"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>


@endsection
