<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    public $timestamps = false;
    
    protected $table='booking_room';

    public function room() {
        $this->hasMany('App\Room','room_id','id');
    }
    public function user() {
        $this->hasMany('App\User','id_user','id');
    }
}
