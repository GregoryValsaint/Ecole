@extends('welcome')

@section('contenu')
<h1>Listes des spécialités</h1>
<ul>
<table>
    

<thead>
<tr><th>Spécialité</th><th>Professeur</th></tr>
</thead>

    @if ($specialites != null)
            @foreach($specialites as $spe)
            <tbody>
            <tr>
            <td>Spécialité n°{{$spe->id}}: {{$spe->libelle}}</td>
                <td><ul>
                     @if (!$spe->professeurs->isEmpty())
                            @foreach($spe->professeurs as $prof)
                                <li><a href="{{route('professeur.show', $prof->id)}}">{{$prof->nom}}  {{$prof->prenom}} ({{$prof->email}})</a>
                                <button type="button" class="btn btn-dark" data-target="#update" >Modifer</button>
                                <button type="button" class="btn btn-danger" data-target="#supprimer" >Supprimer</button>
                                </li><br/>  
                            @endforeach
                    @else
                        <li>Aucun prof</li><br/><br/> 
                    @endif
                </ul></td>
            </tr>  
            </tbody>
            @endforeach
            </table>
            
               
    @else
        <li>La liste est vide !</li>
    @endif
</ul>
@endsection