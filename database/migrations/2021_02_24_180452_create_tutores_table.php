<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('empresa');
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('tipo_documento');   
            $table->string('doc_identidad'); 
            $table->string('pais');
            $table->string('provincia');
            $table->string('municipio');
            $table->string('estado');
            $table->string('telefono');   
            $table->string('email'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutores');
    }
}
