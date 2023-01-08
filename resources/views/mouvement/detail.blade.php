@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="container d-flex">
            <div class="col-md-10">
                <div class="card shadow mb-4">
                    <div class="card-header py-2">
                        <h6 class="m-0 font-weight-bold text-primary">detail Chargement</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Mumero_MVT</th>
                                        <th scope="col">Quantite charger</th>
                                        <th scope="col">Date Chargement</th>
                                        <th scope="col">Date Dechargement</th>
                                        <th scope="col">Quantite Dechargement</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($chargements as $chargement)
                                        <tr>
                                            <td>{{ $chargement->numeromouvement }}</td>
                                            <td>{{ $chargement->quantite }}</td>
                                            <td>{{ $chargement->datecreation }}</td>
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
