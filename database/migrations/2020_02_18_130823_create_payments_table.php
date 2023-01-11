<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->bigInteger('booking_id');
            $table->decimal('amount')->default(0);
            $table->decimal('extras')->default(0);
            $table->decimal('discount',4,4)->default(0);
            $table->decimal('fees')->default(0);
            $table->decimal('taxes',4,4)->default(0);
            $table->decimal('total',9)->default(0);
            $table->timestamp('date')->default(new Expression('CURRENT_TIMESTAMP'));
            $table->string('card_num');
            $table->string('card_type');
            $table->string('code');
            $table->string('method');
            $table->string('ref_number');
            $table->longText('status_response');
            $table->enum('status',['failed','success']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
