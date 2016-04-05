<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverheadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_overhead', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invoice_id');
            $table->integer('user_id');
            $table->float('total_discount_price');
            $table->integer('vat');
            $table->integer('net_amount');         
            $table->enum('status', array(
                '0','1','2','3'
            ));
                        
            $table->timestamps();
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
