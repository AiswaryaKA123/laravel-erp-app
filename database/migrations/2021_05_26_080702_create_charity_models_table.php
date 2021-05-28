<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharityModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charity_models', function (Blueprint $table) {
            $table->id('charity_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('acode');
            $table->string('phno');
            $table->string('amount');
            $table->string('msg',2000)->nullable();

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
        Schema::dropIfExists('charity_models');
    }
}
