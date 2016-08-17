<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
			
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('email')->unique();
						
			$table->enum('status',array(
				'','invited','active','inactive'
			));
			
			$table->enum('type',array(
				'user','admin'
			));
			
			$table->string('password')->nullable();
			$table->string('phone_number')->nullable();
			
			$table->text('address');
			$table->string('state')->nullable();			
			$table->integer('country_id',false,11);
			$table->string('image')->nullable();
			$table->string('remember_token')->nullable();
									            
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
