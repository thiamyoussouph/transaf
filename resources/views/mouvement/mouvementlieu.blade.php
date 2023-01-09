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
                                <th scope="col">Tonne</th>
                                <th scope="col">lieux</th>
                                <th scope="col">Categorie</th>
                                <th scope="col">date enregistrement</th>
                                <th scope="col">responsable</th>
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
                            @foreach ( $Mouvement_lieu as $mouvement_lieu)
                            <tr>
                            <td>{{$mouvement_lieu->mouvement->numeromouvement}}</td>
                                <td>{{$mouvement_lieu->quantite}}</td>
                                <td>{{$mouvement_lieu->lieu->libelle}}</td>
                                <td>{{$mouvement_lieu->mouvement->categorie->libelle}}</td>
                                <td>{{$mouvement_lieu->mouvement->created_at}}</td>
                                <td>{{$mouvement_lieu->mouvement->user->name}}</td>
                                
                                
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