@extends('welcome')

@section('contenu')

<div class="container-fluid">

    <h1>Listes des professeurs</h1>
    <ul>
        
        @if ($professeurs != null)
                @foreach($professeurs as $prof)
                
                    <p>{{$prof->nom}}  {{$prof->prenom}} ({{$prof->email}})
                    <a class="btn btn-info" href="{{route('professeur.show', $prof->id)}}">Profil</a>
                    <a href="{{ route('professeur.edit',$prof->id)}}"
                    class="btn btn-dark">Modifier</a>  </p>        

                @endforeach   
        @else
            <li>La liste est vide !</li>
        @endif
    </ul>
    
</div>

@endsection