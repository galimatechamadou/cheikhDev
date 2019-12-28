<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    public function Order(){
        return $this->hasMany("App\Order");
    }
}
