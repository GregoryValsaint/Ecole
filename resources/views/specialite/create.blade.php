@extends('welcome')

@section('contenu')
<div id="add-spe" class="container-fluid">
  

  <form method="post" action="{{route('specialite.store')}}">
    @csrf
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="code">Code</label>
        <input type="text" class="form-control" id="code" name="code" required>
        
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="libelle">Libellé</label>
        <input type="text" class="form-control" id="libelle" name="libelle" value="" required>
        
      </div>
    </div>
    <button class="btn btn-dark" type="submit">Ajouter</button>
  </form>
  @endsection
</div>
