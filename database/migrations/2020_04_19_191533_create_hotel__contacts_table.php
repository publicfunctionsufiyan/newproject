<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel__contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('hotel_id');
            $table->longText('address');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->tinyInteger('phone')->unique();
            $table->string('website');
            $table->timestamps();
        });
        Schema::table('hotel__contacts', function ($table) {
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel__contacts');
    }
}
