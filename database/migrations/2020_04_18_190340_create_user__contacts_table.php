<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->longText('address');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('postalcode');
            $table->tinyInteger('phone')->unique();
            $table->timestamps();
        });

        Schema::table('user__contacts', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user__contacts');
    }
}
