<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id1');
            $table->string('booking_id2');
            $table->string('pickup_time');
            $table->string('pickup_date');
            $table->text('pickup_address');
            $table->string('pickup_city');
            $table->integer('rent_duration')->nullable();
            $table->text('airport_name')->nullable();
            $table->text('s_o_name')->nullable();
            $table->text('s_o_address')->nullable();
            $table->string('s_o_sarting_time')->nullable();
            $table->string('s_o_ending_time')->nullable();
            $table->string('tour_to')->nullable();
            $table->text('tour_des_addresses')->nullable();
            $table->text('tour_sub_addresses')->nullable();
            $table->string('travel_to_city')->nullable();
            $table->string('rent_type')->nullable();
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
        Schema::dropIfExists('rents');
    }
}
