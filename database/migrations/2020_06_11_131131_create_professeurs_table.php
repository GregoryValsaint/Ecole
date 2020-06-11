<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();

            $table->string('nom',50);
            $table->string('prenom',50);
            $table->string('telephone',50);
            $table->string('email',100)->Unique();

            $table->timestamps();

            //Relation Professeur/Specialite
            $table->unsignedBigInteger('specialite_id');

            //déclarer la contrainte d'intégrité référentielle(Foreign key)
            $table->foreign('specialite_id')
                ->references('id')
                ->on('specialites')
                ->onDelete('restrict')
                ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professeurs');
    }
}
