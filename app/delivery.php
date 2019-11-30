<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    //
    public function delivery(){
        return $this->hasMany("App\Order");
    }
}
