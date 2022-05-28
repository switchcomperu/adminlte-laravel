<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecSubmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_submenu', function (Blueprint $table) {
            $table->integer('idsubmenu', true);
            $table->string('nombre', 200);
            $table->string('icono_forma', 45);
            $table->string('icono_color', 45)->nullable();
            $table->string('href', 45);
            $table->integer('orden');
            $table->string('pagina', 45);
            $table->tinyInteger('ismenu');
            $table->integer('idmenu');
            $table->integer('idsubmenupadre')->nullable();
            $table->string('descripcion', 200);
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
        Schema::dropIfExists('sec_submenu');
    }
}
