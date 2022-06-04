<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->boolean('is_admin')->default(0)->nulleable();
            $table->boolean('estado');
            $table->string('password')->default('');
            $table->string('telefono');
            $table->string('puesto');
            $table->string('departamento');
            $table->date('fecha_ingreso');
            $table->date('fecha_afiliacion');
            $table->string('curp');
            $table->string('rfc');
            $table->string('ine');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
