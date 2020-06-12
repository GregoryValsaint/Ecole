<h1>Listes des spécialités</h1>
<ul>
    
    @if ($specialites != null)
            @foreach($specialites as $spe)
            <li>
                Spécialité n°{{$spe->id}}:<br/>Code: {{$spe->code}} <br/>Libelle: {{$spe->libelle}}<br/>                
                 
                <ul>
                    <br/>Professeurs:
                     @if (!$spe->professeurs->isEmpty())
                            @foreach($spe->professeurs as $prof)
                                <li>{{$prof->nom}}  {{$prof->prenom}} ({{$prof->email}})</li><br/>  
                            @endforeach
                    @else
                        <li>Aucun prof</li><br/><br/> 
                    @endif
                </ul>
            </li>
            @endforeach   
    @else
        <li>La liste est vide !</li>
    @endif
</ul>