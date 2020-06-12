<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //créer de 4 professeurs

        App\Professeur::create(['id'=>1, 'nom'=>'RICHARD', 'prenom'=>'Pierre', 'telephone'=>'0625244878', 'email'=>'pierre.richard@ecole.com', "specialite_id"=>1]);
        App\Professeur::create(['id'=>2, 'nom'=>'DUBOIS', 'prenom'=>'Aline', 'telephone'=>'0625244871', 'email'=>'aline.dubois@ecole.com', "specialite_id"=>1]);
        App\Professeur::create(['id'=>3, 'nom'=>'LEGRAND', 'prenom'=>'Vincent', 'telephone'=>'0625244872', 'email'=>'vincent.legrand@ecole.com', "specialite_id"=>4]);
        App\Professeur::create(['id'=>4, 'nom'=>'KAMAL', 'prenom'=>'Imane', 'telephone'=>'0625244873', 'email'=>'imane.kamal@ecole.com', "specialite_id"=>4]);

        //créer de 5 spécialités

        App\Specialite::create(['id'=>1, 'code'=>'C01', 'libelle'=>'JAVA/JEE']);
        App\Specialite::create(['id'=>2, 'code'=>'C02', 'libelle'=>'.Net']);
        App\Specialite::create(['id'=>3, 'code'=>'C03', 'libelle'=>'Gestion de projet']);
        App\Specialite::create(['id'=>4, 'code'=>'C04', 'libelle'=>'CISCO']);
        App\Specialite::create(['id'=>5, 'code'=>'C05', 'libelle'=>'PHP']);
    }
}
