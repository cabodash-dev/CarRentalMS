<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
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
            $table->string('s_name');
            $table->string('s_natidno');
            $table->string('s_phone');
            $table->string('s_adr');
            $table->string('s_no');
            $table->string('s_email');
            $table->string('s_pwd');
            $table->string('s_dpic');
            $table->longText('s_bio');
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
        Schema::dropIfExists('staff');
    }
}
