<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpTipodocidentidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tp_tipodocidentidad', function (Blueprint $table) {
            $table->integer('IdTipoDocIdent', true);
            $table->string('parnom', 45);
            $table->text('pardesc')->nullable();
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
        Schema::dropIfExists('tp_tipodocidentidad');
    }
}
