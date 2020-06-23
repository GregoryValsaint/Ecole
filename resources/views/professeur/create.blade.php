@extends('welcome')

@section('contenu')

<div class="container-fluid">
  
    <form method="post" action="{{route('professeur.store')}}">
    @csrf
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="Mark" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="Otto" required>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" id="telephone" name="telephone" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-3 mb-3">
            <label for="specialite_id">Spécialité</label>
            <select class="custom-select" name="specialite_id" id="specialite_id"  required>
            @if($specialites != null)
            @foreach($specialites as $spe)            
            <option value="{{ $spe->id }}">{{$spe->libelle}}</option>
                @endforeach
            @endif
            </select>
        </div>
    </div>
    <button class="btn btn-dark" type="submit">Ajouter</button>
    </form>
</div>
@endsection