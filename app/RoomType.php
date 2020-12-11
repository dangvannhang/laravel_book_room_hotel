<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    public $timestamps =false;
    
    protected $table='room_types';

    public function room(){
        return $this->hasMany('App\Room','id_type','id');
    }
}
