<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderOverheadTable extends Migration
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
			$table->string('invoice_id')->nullable();
			$table->unsignedInteger('user_id')->nullable();
			$table->double('total_discount_price')->nullable();
			$table->unsignedInteger('vat')->nullable();
			$table->unsignedInteger('net_amount')->nullable();
			
			$table->enum('status', array(
                'open','done','delivered','approved','cancel'
            ));
						            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);

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
