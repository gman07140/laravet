<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numbers', function (Blueprint $table) 
        {
            $table->increments('numid');
            $table->integer('clientid')->unsigned();
            $table->string('number');
            $table->boolean('type');
            $table->string('note');
        
            $table->foreign('clientid')
                  ->references('id')
                  ->on('clients')
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
        Schema::drop('numbers');
    }
}
