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
            $table->unsignedInteger('block_id');
            $table->unsignedInteger('room_type_id');
            $table->integer('floor');
            $table->integer('price');
            $table->boolean('availablity')->default(1);

            $table->timestamps();
        });

        Schema::table('rooms', function ($table) {
            $table->foreign('block_id')->references('id')->on('blocks')->onDelete('set null');
            $table->foreign('room_type_id')->references('id')->on('room__types')->onDelete('set null');

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
