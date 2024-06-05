<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    public function mesa(){
        return $this->belongsTo('App\Models\Table');


    }
    public function orden(){
        return $this->belongsTo('App\Models\Order');
    }

   
    public function venta(){
        return $this->hasMany('App\Models\Sale');
    }

    public function producto(){
        return $this->hasMany('App\Models\Product');
    }
    
    public function admin(){
        return $this->belongsTo('App\Models\Admin');
    }

}
