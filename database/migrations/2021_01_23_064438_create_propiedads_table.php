<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Propietario');
            $table->unsignedBigInteger('Tipo_Documento_id');
            $table->foreign('Tipo_Documento_id')->references('id')->on('tipo__documentos');
            $table->string('Numero_Documento');
            $table->string('Celular');
            $table->string('Manzana');
            $table->string('Lote');
            $table->string('Numero_Suministro');
            $table->unsignedBigInteger('Tipo_Propiedad_id');
            $table->foreign('Tipo_Propiedad_id')->references('id')->on('tipo__propiedads');
            $table->date('Fecha_Inscripcion');
            $table->decimal('Pago_Mensual', 8,2);
            $table->decimal('Pago_Reconeccion', 8,2);
            $table->boolean('Estado');
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
        Schema::dropIfExists('propiedads');
    }
}
