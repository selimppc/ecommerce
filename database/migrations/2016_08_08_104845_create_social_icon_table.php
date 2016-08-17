<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialIconTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_icon', function (Blueprint $table) {
            $table->increments('id');
			
			$table->string('title')->nullable();
			$table->string('slug')->unique();
						
			$table->enum('status',array(
				'active','inactive'
			));
			
			$table->string('link')->nullable();
			$table->string('icon')->nullable();
			
									            
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
