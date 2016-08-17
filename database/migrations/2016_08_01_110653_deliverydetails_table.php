<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeliverydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('deliverydetails', function (Blueprint $table) {
            $table->increments('id');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('suburb')->nullable();
			$table->string('postcode')->nullable();			
			$table->string('state')->nullable();
			$table->string('country')->nullable();
			$table->string('telephone')->nullable();
			$table->string('address')->nullable();
			$table->integer('user_id');
			$table->string('email')->nullable();
			            
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
