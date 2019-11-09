<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->integer('mobileNo');
            $table->string('email', 191);
            $table->integer('totalPersons');
            $table->string('mealPlan', 191);
            $table->date('checkIn');
            $table->date('checkOut');
            $table->integer('bookingStatus');
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
        Schema::dropIfExists('boat');
    }
}
