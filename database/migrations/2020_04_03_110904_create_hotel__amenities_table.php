<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel__amenities', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('hotel_id');
            $table->unsignedInteger('aminity_id');

            $table->timestamps();
        });

        Schema::table('hotel__amenities', function ($table) {
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('set null');
            $table->foreign('aminity_id')->references('id')->on('amenities')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel__amenities');
    }
}
