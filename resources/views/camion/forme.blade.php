@extends('app')

@section('content')
<div class="card" style="width: 35rem; margin-left:35%">
    <div class="card-header ">
        <h3 class="card-title m-4">Ajouter un camion</h3>
    </div>
  <div class="card-body">
  <form action="{{ route('camion.store')}}" method="post" >
    @csrf
            <div class="mb-3">
                <label for="matricule" class="form-label">Matricule</label>
                <input type="text" class="form-control" id="matricule" aria-describedby="emailHelp" name="matricule">
                
            </div>
            <div class="mb-3" >
                <label for="marque" class="form-label">marque</label>
                <input type="text" class="form-control" id="marque" name="marque">
            </div>
            <div class="mb-3 ">
                <label for="volume" class="form-label">volume</label>
                <input type="number" class="form-control" id="volume" name="volume">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
</div>
        

@endsection