<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JoinOrderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('Order_Product', function (Blueprint $table) {

                       $table->BigIncrements('id');
                       $table->unsignedBigInteger('Order_id');
                       $table->unsignedBigInteger('Product_id');
                       $table->timesTamps();
                                                                     

        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
