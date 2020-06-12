@extends('welcome')

@section('contenu')
<h1>Listes des professeurs</h1>
<ul>
    
    @if ($professeurs != null)
            @foreach($professeurs as $prof)
            
                <li>{{$prof->nom}}  {{$prof->prenom}} ({{$prof->email}})</li><br/>
                               
                 
                
            
            @endforeach   
    @else
        <li>La liste est vide !</li>
    @endif
</ul>
@endsection