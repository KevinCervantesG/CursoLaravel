<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #Tabla rol
        #Indica el rol del usuario mediante un id
        #Puede ser Administrador o Vendedor
        Schema::create('rol', function (
            Blueprint $table)
        {
            $table->bigIncrements('id_rol')->unsigned();
            $table->string('descripcion_rol', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol');
    }
}
