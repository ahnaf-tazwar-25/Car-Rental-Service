<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('no_plate')->unique();
            $table->string('reg_to');
            $table->string('color');
            $table->string('type');
            $table->integer('total_passenger_sits');
            $table->string('mafacture_name');
            $table->string('model');
            $table->boolean('isVerified');
            $table->string('available_to')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}

