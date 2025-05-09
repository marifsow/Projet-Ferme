<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimauxTable extends Migration
{
    public function up()
    {
        Schema::create('animaux', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('espece');
            $table->date('date_naissance');
            $table->string('etat_sante');
            $table->timestamps();             
        });
    }

    public function down()
    {
        Schema::dropIfExists('animaux');
    }
}
