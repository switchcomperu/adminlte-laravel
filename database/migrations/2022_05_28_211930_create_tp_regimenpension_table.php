<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpRegimenpensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tp_regimenpension', function (Blueprint $table) {
            $table->integer('idregimenpension', true);
            $table->char('parcod', 2);
            $table->string('parnom', 45);
            $table->text('pardesc')->nullable();
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
        Schema::dropIfExists('tp_regimenpension');
    }
}
