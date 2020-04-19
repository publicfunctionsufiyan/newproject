<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('hotel_id');
            $table->integer('rating');
            $table->string('title');
            $table->longText('review');
            $table->date('travel_date');
            $table->boolean('own_experience');
            $table->timestamps();
        });
        Schema::table('reviews', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('reviews');
    }
}
