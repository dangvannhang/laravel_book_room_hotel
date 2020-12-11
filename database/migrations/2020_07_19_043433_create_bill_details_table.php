<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->unsignedInteger('id_bill');
            $table->foreign('id_bill')->references('id')->on('bills');
            $table->unsignedInteger('id_room');
            $table->foreign('id_room')->references('id')->on('rooms');
            $table->unsignedInteger('id_service');
            $table->foreign('id_service')->references('id')->on('services');
            $table->double('room_charge');
            $table->double('service_charge')->nullable();
            $table->integer('discount');
            $table->integer('day_number');
            $table->double('totalPrice');
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
        Schema::dropIfExists('bill_details');
    }
}
