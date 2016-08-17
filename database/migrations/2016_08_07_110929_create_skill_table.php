<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
			
			$table->string('title')->nullable();
			$table->string('slug')->unique();
			$table->text('desc');
			$table->unsignedInteger('rating')->nullable();
			
			$table->enum('status',array(
				'active','inactive'
			));
									            
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
