<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('hotel_id');
            $table->unsignedInteger('block_id');
            $table->string('type');
            $table->string('view');
            $table->longText('detail');
            $table->string('size');
            $table->string('bed');
            $table->string('person_sleeps');
            $table->integer('floor');
            $table->integer('price');
            $table->boolean('availablity')->default(1);
            $table->timestamps();
        });

        Schema::table('rooms', function ($table) {
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('set null');
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
