<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('rooms')) {

            Schema::create('rooms', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('id_type');
                $table->foreign('id_type')->references('id')->on('room_types');
                $table->string('name');
                $table->integer('floor');
                $table->string('image')->nullable();
                $table->string('note',255)->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
