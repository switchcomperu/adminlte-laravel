<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRfAportetrabajadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rf_aportetrabajador', function (Blueprint $table) {
            $table->integer('idaportetrabajador', true);
            $table->integer('aporte_idestado');
            $table->integer('aporte_idperiodo');
            $table->date('aporte_fechemi');
            $table->date('aporte_fechven');
            $table->integer('idregimenpension');
            $table->decimal('aporte_importe', 20);
            $table->string('aporte_codigo', 45)->nullable();
            $table->string('aporte_ticket', 45)->nullable();
            $table->text('aporte_obs')->nullable();
            $table->date('mora_fecha')->nullable();
            $table->decimal('mora_importe', 20)->nullable();
            $table->date('multa_fecha')->nullable();
            $table->decimal('multa_importe', 20)->nullable();
            $table->integer('idempresa');
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
        Schema::dropIfExists('rf_aportetrabajador');
    }
}
