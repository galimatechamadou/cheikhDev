<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    //
    public function Product(){
       return $this ->hasMany("App\Product");
    }
    public function Order(){
        return $this ->hasMany("App\Order");
    }
}
