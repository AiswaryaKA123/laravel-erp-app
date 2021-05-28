<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_models', function (Blueprint $table) {
            $table->id();
            $table->string('studfname');
            $table->string('studlname');
            $table->string('studid');
            $table->string('studcaddress');
            $table->string('studpaddress');
            $table->string('studcast');
            $table->string('studreligion');
            $table->string('studstate');
            $table->string('studcity');
            $table->string('studpin');
            $table->string('studcountry');
            $table->string('studemail');
            $table->string('studphoneno');
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
        Schema::dropIfExists('scholarship_models');
    }
}
