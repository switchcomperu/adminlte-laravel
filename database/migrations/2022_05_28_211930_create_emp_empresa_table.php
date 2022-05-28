<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_empresa', function (Blueprint $table) {
            $table->integer('idempresa', true);
            $table->integer('empcod');
            $table->integer('idestado');
            $table->text('emprs');
            $table->string('empnom', 45);
            $table->string('empruc', 45);
            $table->text('empdirec')->nullable();
            $table->string('emptelf', 45)->nullable();
            $table->string('empemail', 200)->nullable();
            $table->string('empweb', 200)->nullable();
            $table->text('empdomfiscal')->nullable();
            $table->string('empcodigopostal', 45)->nullable();
            $table->string('empciudad', 45)->nullable();
            $table->text('empobs')->nullable();
            $table->date('sunatfechins')->nullable();
            $table->date('sunatfechini')->nullable();
            $table->string('sunatpartida', 45)->nullable();
            $table->string('sunatusu', 45)->nullable();
            $table->string('sunatpwd', 45)->nullable();
            $table->boolean('isfacturacionelectronica')->nullable();
            $table->integer('idtipodocumento');
            $table->integer('idpais');
            $table->integer('iddistrito');
            $table->integer('idindustria')->nullable();
            $table->string('cuenta_detraccion', 45)->nullable();
            $table->integer('codusureg');
            $table->integer('codusuact');
            $table->dateTime('fechreg');
            $table->dateTime('fechact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_empresa');
    }
}
