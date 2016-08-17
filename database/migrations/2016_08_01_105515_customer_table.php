<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->text('password');
			$table->string('suburb')->nullable();
			$table->string('postcode')->nullable();
			$table->string('state')->nullable();
			$table->string('country')->nullable();
			$table->string('telephone')->nullable();
			$table->text('address');
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
