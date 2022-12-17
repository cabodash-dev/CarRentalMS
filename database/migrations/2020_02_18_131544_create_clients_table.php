<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('national_id_number');
            $table->string('phone');
            $table->string('date_of_birth');
            $table->longText('address');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->string('number');
            $table->string('profile_img_path');
            $table->longText('bio');
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
        Schema::dropIfExists('clients');
    }
}
