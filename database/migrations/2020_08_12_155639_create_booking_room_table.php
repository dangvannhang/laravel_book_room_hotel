<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('booking_room')) {

            Schema::create('booking_room', function (Blueprint $table) {
                $table->increments('id');
                $table->date('time_from')->nullable();
                $table->date('time_to')->nullable();
                $table->string('status');
            });

            Schema::table('booking_room',function(Blueprint $table){
                if(!Schema::hasColumn('booking_room','room_id')) {
                    $table->integer('room_id')->unsigned()->nullable();
                    $table->foreign('room_id')->references('id')->on('rooms');
                }
                if(!Schema::hasColumn('booking_room','id_user')) {
                    $table->integer('id_user')->unsigned()->nullable();
                    $table->foreign('id_user')->references('id')->on('users');
                }
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_room');
    }
}
