@extends('welcome')

@section('contenu')

<div>
  <h1 class="display-3">Ajouter un nouveau professeur</h1>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    <br />
  @endif
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
            <option selected disabled value="{{ $spe->id }}">Sélectionner...</option>
            
            <option>{{$spe->libelle}}</option>
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