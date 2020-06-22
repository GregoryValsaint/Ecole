@extends('welcome')

@section('contenu')
<div>
  

  <form method="post" action="{{route('specialite.store')}}">
    @csrf
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="code">Code</label>
        <input type="text" class="form-control is-invalid" id="code" name="code" required>
        <div class="invalid-feedback">
          Entrez un code.
        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="libelle">Libellé</label>
        <input type="text" class="form-control is-invalid" id="libelle" name="libelle" required>
        <div class="invalid-feedback">
          Choisissez un libellé.
        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Ajouter</button>
  </form>
  @endsection
</div>
