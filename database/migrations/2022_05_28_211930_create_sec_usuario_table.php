<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec_usuario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('usuario', 30);
            $table->string('password', 130);
            $table->string('nombre', 100);
            $table->string('correo', 80);
            $table->dateTime('last_session')->nullable();
            $table->integer('activacion')->default(0);
            $table->string('token', 40);
            $table->string('token_password', 100)->nullable();
            $table->integer('password_request')->nullable()->default(0);
            $table->string('token_session', 45)->nullable();
            $table->integer('idrol');
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
        Schema::dropIfExists('sec_usuario');
    }
}
