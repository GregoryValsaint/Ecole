@extends('welcome')

@section('contenu')

<div>
  
    <form method="post" action="{{route('professeur.store')}}">
    @csrf
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control is-valid" id="prenom" name="prenom" value="Mark" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <label for="nom">Nom</label>
            <input type="text" class="form-control is-valid" id="nom" name="nom" value="Otto" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control is-valid" id="telephone" name="telephone" required>
            <div class="invalid-feedback">
                Please provide a valid phone.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control is-valid" id="email" name="email" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="specialite_id">Spécialité</label>
            <select class="custom-select is-invalid" id="specialite_id" name="specialite_id" required>
            @if($specialites != null)
            @foreach($specialites as $spe)            
            <option value="{{ $spe->id }}">{{$spe->libelle}}</option>
                @endforeach
            @endif
            </select>
            <div class="invalid-feedback">
            Please select a valid state.
            </div>
        </div>
    </div>
    <button class="btn btn-primary" type="submit">Ajouter Professeur</button>
    </form>
</div>
@endsection