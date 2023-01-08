@extends('layouts.master')

@section('content')
    <div class="col-md-10">
        <div class="card">
            <div class="card-header ">
                <h3 class="card-title m-0">Ajoute mouvement</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('mouvement.store.decharge') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                         <div class="mb-5">
                                    <label for="type" class="form-label">Mouvement</label>
                                    <select class="" aria-label="Default select example" name="mouvement">
                                        @foreach ($mouvements as $mouvement)
                                            @if ($mouvement->decharger == 0)
                                                <option value="{{ $mouvement->id }}">{{ $mouvement->numeromouvement }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            <div class="mb-3">
                                <label for="quantite" class="form-label">quantite</label>
                                <input type="number" class="form-control" id="quantite" name="quantite">
                            </div>
                            <div class="mb-5">

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary" style="width: 90%;">Ajouter</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
