@extends('welcome')

@section('contenu')
<div class="container-fluid">
    @csrf
    <h1>Listes des professeurs</h1>
    <div class="bio-prof">                
                
        <p>{{$professeur->nom}}   </p>
        <p>{{$professeur->prenom}} </p>
        <p>{{$professeur->telephone}} </p>
        <p>{{$professeur->email}} </p>
        <p>{{$professeur->specialite->libelle}}</p><br/>
        
        <a href="{{ route('professeur.edit', $professeur->id)}}"
        class="btn btn-dark">Modifier</a>
        
        <div>
            <form method="post" action="{{route('professeur.destroy', $professeur->id)}}">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger " type="submit">Supprimer</button>
            </form>
        </div>
                       
            
                
    </div>
</div>
@endsection