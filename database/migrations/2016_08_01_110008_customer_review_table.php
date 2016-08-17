<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('customer_review', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name')->nullable();
			$table->string('location')->nullable();
			$table->string('product_id')->nullable();
			$table->integer('subject');			
			$table->string('message')->nullable();
			$table->string('status')->nullable();
			            
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
