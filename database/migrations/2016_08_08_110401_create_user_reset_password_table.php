<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserResetPasswordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reset_password', function (Blueprint $table) {
            $table->increments('id');
			
			$table->unsignedInteger('user_id')->nullable();
			$table->dateTime('reset_password_time');
			$table->dateTime('reset_password_expire');
			$table->string('reset_password_token')->nullable();
			$table->tinyInteger('status',false,11);
												            
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
