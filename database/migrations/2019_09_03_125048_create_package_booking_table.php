<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_booking', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('packageId');
            $table->date('arrivalDate');
            $table->integer('noOfAdult');
            $table->integer('noOfKids');
            $table->string('tourBudget', 191);
            $table->string('activities', 191);
            $table->string('regions', 100);
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
        Schema::dropIfExists('package_booking');
    }
}
