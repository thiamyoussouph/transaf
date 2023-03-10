@extends('layouts.app')

@section('content')

<div class="row">
    <div class="container d-flex">
        <div class="col-md-6 ">
            <div class="card shadow mb-4">
                <div class="card-header py-2">
                    <h6 class="m-0 font-weight-bold text-primary">Liste Lieux</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Libelle</th>
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
                                @foreach ($Lieux as $lieux)
                                <tr>
                                    <td>{{$lieux->libelle}}</td>


                                    <td>
                                        {{-- <a href="#"><i class="bi bi-plus-circle" style="color: #03ECC7;"></i></a> --}}
                                        <a href="#"><i class="bi bi-pencil-square" style="color:#FFEF00;"></i></a>
                                        <a href="{{route('lieu.destroy',['id'=>$lieux->id])}}"> <i class="bi bi-x-circle" style="color:#E40000;"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" >
             <div class="card" >
                <div class="card-header ">
                     <h3 class="card-title m-0">Ajouter un Lieux</h3>
                 </div>
                 <div class="card-body">
                    <form action="{{route('lieu.store')}}" method="POST" >
                        @csrf
                            <div class="mb-3">
                                 <label for="libelle" class="form-label">Libelle</label>
                                 <input type="text" class="form-control" id="libelle"  name="libelle">
                             </div>
                             <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
               </div>
        </div>
        </div>
    </div>
</div>


@endsection
