@extends('welcome')

@section('contenu')

<div>
  
    <form method="post" action="{{route('professeur.update',$professeur->id)}}">
    @method('PUT')
    @csrf
    

    <div>
        @if(isset ($success))
        {{$success}}
        @endif
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
        <li>{{$professeur->nom}}   </li>
                <li>{{$professeur->prenom}} </li>
                <li>{{$professeur->telephone}} </li>
                <li>{{$professeur->email}} </li>
                <li>{{$professeur->specialite->libelle}}</li><br/>
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
    <button class="btn btn-primary" type="submit">Modifier Spécialité</button>
    </form>
</div>
@endsection