<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->timestamp('booking_date')->default(new Expression('CURRENT_TIMESTAMP'));
            $table->integer('admin_id')->nullable();
            $table->integer('staff_id')->nullable();
            $table->integer('client_id')->nullable();
            $table->integer('car_id')->nullable();
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->enum('rate_type',['day','week','month'])->default('day');
            $table->decimal('rate_price')->default(0);
            $table->string('length')->default(0);
            $table->string('confirmation_num');
            $table->decimal('security_hold_amount')->default(0);
            $table->integer('payment_id')->nullable();
            $table->enum('status',['hold','paid','cancelled'])->default('hold');
            $table->enum('car_status',['returned','driving','ready'])->default('ready');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
