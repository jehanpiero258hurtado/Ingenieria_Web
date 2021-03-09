<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Apellido_Paterno');
            $table->string('Apellido_Materno');
            $table->string('Edad');
            $table->unsignedBigInteger('Tipo_Documento');
            $table->foreign('Tipo_Documento')->references('id')->on('tipo__documentos');
            $table->string('Numero_Documento');
            $table->string('Direccion');
            $table->string('Celular');
            $table->string('Gestion');
            $table->string('Contrasena');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
