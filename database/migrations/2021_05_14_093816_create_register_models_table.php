<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_models', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('dob');
            $table->string('address');
            $table->string('faname');
            $table->string('mname');
            $table->string('gname');
            $table->string('focc');
            $table->string('mocc');
            $table->string('class');
            $table->string('section');
            $table->string('email');
            $table->string('phoneno');
            $table->string('username');
            $table->string('password');
            $table->string('cpassword');
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
        Schema::dropIfExists('register_models');
    }
}
