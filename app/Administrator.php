<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    //
    public function products(){
        return $this->hasMany("App\Product");
    }
    public function order(){
        return $this->hasMany("App\Order");
    }
}
