<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];
    public function Category(){
        return $this ->belongsTo('App\Category');
    }
   
    public function Administrator(){
        return $this ->belongsTo('App\Administrator');
   }
   public function Order(){
        return $this ->belongsToMany('App\Order');
   }
   
}
