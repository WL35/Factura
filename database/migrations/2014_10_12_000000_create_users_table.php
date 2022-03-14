<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
     Schema::create('users', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_name');
            $table->string('usu_cedula')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('usu_estado')->default(1); //0  Inactivo 1 Activo  
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->foreignId('cat_id')->references('cat_id')->on('categorias')->default(1);             
        });







    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
