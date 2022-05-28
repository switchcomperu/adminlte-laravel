<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_empleado', function (Blueprint $table) {
            $table->integer('IdEmpleado', true);
            $table->smallInteger('IdEmpresa');
            $table->string('ApePaterno', 35)->nullable();
            $table->string('ApeMaterno', 35)->nullable();
            $table->string('Nombres', 80)->nullable();
            $table->smallInteger('IdTipoDocIdent')->nullable();
            $table->string('NroDocumentIdent', 20)->nullable();
            $table->date('FechaNacim')->nullable();
            $table->char('sexo', 1)->nullable();
            $table->tinyInteger('IdNacionalidad')->nullable();
            $table->tinyInteger('IdSitEducativa')->nullable();
            $table->tinyInteger('IdEstadoCivil')->nullable();
            $table->string('Telefono', 30)->nullable();
            $table->string('Email', 30)->nullable();
            $table->string('Discapacidad', 20)->nullable();
            $table->string('GrupoSanguineo', 20)->nullable();
            $table->text('EnfermAdolece')->nullable();
            $table->integer('IdEstado');
            $table->dateTime('codusureg');
            $table->dateTime('codusuact');
            $table->integer('fechreg');
            $table->integer('fechact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('db_empleado');
    }
}
