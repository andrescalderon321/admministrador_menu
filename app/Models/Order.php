<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function mesa(){
        return $this->belongsTo('App\Models\Table');


    }

    public function detalle_orden (){

        return $this->hasOne('App\Models\Order_detail');

    }
   
    


}
