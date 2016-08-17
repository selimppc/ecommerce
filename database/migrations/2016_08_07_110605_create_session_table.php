<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('user_id')->nullable();
			$table->unsignedInteger('product_id')->nullable();
			$table->unsignedInteger('product_quantity')->nullable();
			$table->string('product_color')->nullable();
			$table->string('last_url')->nullable();
			$table->unsignedInteger('last_activity')->nullable();
									            
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
