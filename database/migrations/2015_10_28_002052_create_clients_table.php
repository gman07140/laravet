<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('fone')->nullable();
            $table->string('fone2')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email')->nullable();
            $table->integer('bairro')->nullable();
            $table->integer('referencia')->nullable();
            $table->timestamps();
        
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clients');
    }
}
