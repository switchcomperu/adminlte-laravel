<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpEmpresaxusuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_empresaxusuario', function (Blueprint $table) {
            $table->integer('idempresa');
            $table->integer('idusuario');
            $table->dateTime('fechreg');
            $table->integer('codusureg');

            $table->primary(['idempresa', 'idusuario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_empresaxusuario');
    }
}
