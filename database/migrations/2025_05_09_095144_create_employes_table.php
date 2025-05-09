<?php

// database/migrations/xxxx_xx_xx_create_employes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('role');  
            $table->date('date_embauche');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employes');
    }
}
