<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function administrator(){
        return $this->belongsTo('App\administrator');
    }
    public function Order(){
        return $this->belongsToMany('App\Order');
    }
    
}
