<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('customer_review', function ($table) {
            $table->string('id')->unique();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('product_id')->nullable();
            $table->integer('subject')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();            
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
