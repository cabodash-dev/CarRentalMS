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
            $table->bigIncrements('id')->unique();
            $table->integer('category_id');
            $table->string('registration_num');
            $table->string('name');
            $table->string('type');
            $table->string('model');
            $table->string('year');
            $table->string('series');
            $table->integer('fuel_tank_capacity')->default(0);
            $table->longText('features');
            $table->string('exterior_img');
            $table->string('interior_img');
            $table->string('rear_img');
            $table->string('front_img');
            $table->enum('status',['good','off','maintenance','sold'])->default('good');
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
        Schema::dropIfExists('cars');
    }
}
