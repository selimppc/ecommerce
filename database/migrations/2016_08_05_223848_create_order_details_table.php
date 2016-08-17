<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('order_head_id')->nullable();			
			$table->unsignedInteger('product_id')->nullable();
			$table->unsignedInteger('product_variation_id')->nullable();
			$table->unsignedInteger('qty')->nullable();
			$table->double('price')->nullable();
						
			$table->enum('status', array(
                '0','1','2','3'
            ));
						            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);

            $table->timestamps();
        });
		
		Schema::table('order_details', function($table) {
             $table->foreign('order_head_id')->references('id')->on('order_overhead');
        });
		
		Schema::table('order_details', function($table) {
             $table->foreign('product_id')->references('id')->on('product');
        });
		
		Schema::table('order_details', function($table) {
             $table->foreign('product_variation_id')->references('id')->on('product_variation');
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
