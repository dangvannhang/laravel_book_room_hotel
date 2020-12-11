<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps=false;

    protected $table='rooms';

    public function room_type(){
        return $this->hasMany('App\RoomType','id_type','id');
    }

    public function bill_detail(){
        return $this->hasMany('App\BillDetal','id','id_Room');
    }

    public function booking() {
        return $this->hasOne('App\Booking','room_id','id');
    }
}
