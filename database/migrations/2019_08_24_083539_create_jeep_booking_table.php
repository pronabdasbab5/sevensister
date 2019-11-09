<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJeepBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeep_booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jeepId');
            $table->integer('timeId');
            $table->integer('rangeId');
            $table->integer('parkId');
            $table->integer('totalPrice');
            $table->integer('nationality');
            $table->date('orderDate');
            $table->integer('mobileNo');
            $table->integer('totalJeep');
            $table->string('email', 191);
            $table->integer('totalPersons');
            $table->integer('age');
            $table->string('personName', 100);
            $table->string('paymentRequestId', 191);
            $table->string('paymentType', 100);
            $table->string('paymentId', 100);
            $table->string('status', 20);
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
        Schema::dropIfExists('jeep_booking');
    }
}
