<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_permiso', function (Blueprint $table) {
            $table->integer('idpermiso', true);
            $table->string('nombre', 45);
            $table->text('descripcion');
            $table->text('mensaje')->nullable();
            $table->integer('idmodulo');
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
        Schema::dropIfExists('sec_permiso');
    }
}
