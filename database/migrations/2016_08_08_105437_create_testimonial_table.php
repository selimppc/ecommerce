<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('testimonial', function (Blueprint $table) {
            $table->increments('id');
			
			$table->string('name')->nullable();
			$table->string('slug')->unique();
						
			$table->enum('status',array(
				'active','inactive'
			));
			
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			
			$table->text('content');
			$table->string('project')->nullable();			
									            
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
