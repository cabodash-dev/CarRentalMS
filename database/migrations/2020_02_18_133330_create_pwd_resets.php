<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePwdResets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * -- CREATE TABLE `crms_pwd_resets` (
--   `id` int(20) NOT NULL,
--   `email` varchar(200) NOT NULL,
--   `token` longtext NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;*/
        Schema::create('pwd_resets', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('email');
            $table->longText('token');
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
        Schema::dropIfExists('pwd_resets');
    }
}
