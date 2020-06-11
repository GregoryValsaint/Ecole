<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    //désigner les champs modifiables
    protected $fillable = ['code', 'libelle'];

    //fonction pour récupérer la liste des commandes
    public function specialite(){
        return $this->hasMany(Professeur::class);
    }
}
