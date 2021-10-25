<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Rfc4122\NilUuid;

class CreateCarOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_owners', function (Blueprint $table) {
            $table->id();
            

            $table->string('nID')->unique();
            $table->string('fName');
            $table->string('lName');
            $table->string('password');
            $table->string('email')->unique();
            
            $table->string('contact_number')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->boolean('terms');
            $table->boolean('is_active');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_owners');
    }
}
