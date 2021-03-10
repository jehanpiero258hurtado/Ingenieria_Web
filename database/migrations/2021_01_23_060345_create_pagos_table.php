<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Manzana');
            $table->foreign('Manzana')->references('id')->on('propiedads');
            $table->unsignedBigInteger('Lote');
            $table->foreign('Lote')->references('id')->on('propiedads');
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Fin');
            $table->date('Fecha_Vencimiento');
            $table->decimal('Monto',8,2);
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
        Schema::dropIfExists('pagos');
    }
}
