<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps=false;
    
    protected $table='services';

    public function bill_detail(){
        return $this->hasMany('App\BillDetail','id_Service','id_Service');
    }
}
