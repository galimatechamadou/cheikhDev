<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function Delivery(){
        return $this->belongsTo("App\Delivery");
    }
     public function Administrator(){
          return $this->belongsTo("App\Administrator");
     }
     public Function Order(){
         return $this->belongsToMany("App\Order");

     }
}
