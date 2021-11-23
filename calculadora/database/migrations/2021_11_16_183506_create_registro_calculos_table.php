<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCalculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_calculos', function (Blueprint $table) {
            $table->id();
            $table->string('Sistema_Numerico',20);
            $table->string('Cantidad_Digitos',15);
            $table->string('Operacion',15);
            $table->string('Primer_Cadena',15);
            $table->string('Segunda_Cadena',15);
            $table->string('Operando',20);
            $table->string('Resultado',30);
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
        Schema::dropIfExists('registro_calculos');
    }
}
