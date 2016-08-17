<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_image', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('cat_slider_id')->nullable();
			$table->string('name')->nullable();
			$table->string('slug')->unique();
			
			$table->enum('group',array(
				'','group_1'
			));
			
			$table->enum('status',array(
				'active','inactive'
			));
			
			$table->string('image')->nullable();
			$table->string('thumbnail')->nullable();
			$table->string('url')->nullable();
									            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);

            $table->timestamps();
        });
		
		Schema::table('slider_image', function($table) {
             $table->foreign('cat_slider_id')->references('id')->on('cat_slider');
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
