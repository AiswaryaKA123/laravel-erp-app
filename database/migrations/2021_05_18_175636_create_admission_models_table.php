<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_models', function (Blueprint $table) {
            $table->id();
            $table->string('sname');
            $table->string('class');
            $table->string('admyear');
            $table->string('dob');
            $table->string('aadhaar');
            $table->string('district');
            $table->string('address');
            $table->string('pin');
            $table->string('blgrp');
            $table->string('idmark1');
            $table->string('idmark2');
            $table->string('prevschool');
            $table->string('prevclass');
            $table->string('prevyear');
            $table->string('grade');
            $table->string('achieve');
            $table->string('gbehaviour');
            $table->string('illness');
            $table->string('secondlang');
            $table->string('thirdlang');
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
        Schema::dropIfExists('admission_models');
    }
}
