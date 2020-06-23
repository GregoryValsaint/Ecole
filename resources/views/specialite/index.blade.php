@extends('welcome')

@section('contenu')
<div class="container-fluid">
    <h1>Listes des spécialités</h1>
    <p>{{session()->get('info')}}</p>
                <table class="table table-hover table-dark">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Spécialité</th>
        <th scope="col">Professeur</th>
        </tr>
    </thead>
    @if ($specialites != null)
                @foreach($specialites as $spe)
    <tbody>
        <tr>
        <th scope="row">{{$spe->id}}</th>
        <td>{{$spe->libelle}}</td>
        <td>@if (!$spe->professeurs->isEmpty())
                @foreach($spe->professeurs as $prof)
                    <ul><a class="speCss" href="{{route('professeur.show', $prof->id)}}">{{$prof->nom}}  {{$prof->prenom}} ({{$prof->email}})</a>
                    </ul><br/>  
                @endforeach
            @else
            <ul>Aucun prof</ul><br/><br/> 
            @endif</td>
        
        </tr>
    </tbody>
    @endforeach
        
    </table>

        @else
            <li>La liste est vide !</li>
        @endif
</div>
@endsection