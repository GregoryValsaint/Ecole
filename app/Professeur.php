<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    //désigner les champs modifiables
    protected $fillable = ['nom', 'prenom', 'telephone', 'email'];

    //fonction pour récupérer la liste des commandes
    public function specialite(){
        return $this->belongsTo(Specialite::class);
    }
}
