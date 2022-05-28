<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfPeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rf_periodo', function (Blueprint $table) {
            $table->integer('idperiodo')->primary();
            $table->string('periodo', 45);
            $table->tinyInteger('activo');
            $table->dateTime('fechreg');
            $table->dateTime('fechact');
            $table->integer('codusureg');
            $table->integer('codusuact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rf_periodo');
    }
}
