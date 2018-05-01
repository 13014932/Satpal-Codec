<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //method is used to add new table to your database
    public function up()
    {
        Schema::create('cruds', function (Blueprint $table) {

            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->bigInteger('mobile');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
//method should reverse the operations performed by the up method
    public function down()
    {
        Schema::dropIfExists('cruds');
    }
}
