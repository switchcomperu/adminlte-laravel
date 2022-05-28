<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_menu', function (Blueprint $table) {
            $table->integer('idmenu', true);
            $table->integer('menucod');
            $table->string('nombre', 45);
            $table->string('icono_forma', 45);
            $table->string('icono_color', 45)->nullable();
            $table->string('href', 45);
            $table->integer('orden');
            $table->string('pagina', 45)->nullable();
            $table->string('descripcion', 100)->nullable();
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
        Schema::dropIfExists('sec_menu');
    }
}
