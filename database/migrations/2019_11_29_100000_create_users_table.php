<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        #Tabla usuario
        #Guarda los diferentes datos requeridos de un usuario
        Schema::create('usuario', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('nombre', 50);
            $table->string('correo', 50)->unique();
            $table->string('contrasenia', 20);

            $table->unsignedBigInteger('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id_rol')->on('rol');
            
        });

        
        

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
