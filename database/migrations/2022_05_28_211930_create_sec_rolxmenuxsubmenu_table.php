<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecRolxmenuxsubmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_rolxmenuxsubmenu', function (Blueprint $table) {
            $table->integer('idrol');
            $table->integer('idmenu');
            $table->integer('idsubmenu');
            $table->tinyInteger('activo');
            $table->dateTime('fechreg');
            $table->dateTime('fechact');
            $table->integer('codusureg');
            $table->integer('codusuact');

            $table->primary(['idrol', 'idmenu', 'idsubmenu']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sec_rolxmenuxsubmenu');
    }
}
