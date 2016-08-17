<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
			
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
						
			$table->enum('status',array(
				'active','inactive'
			));
			
			$table->string('twitter')->nullable();
			$table->string('facebook')->nullable();
			
			$table->string('google_plus')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('image')->nullable();
			$table->string('slug')->unique();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->string('designation')->nullable();
			$table->text('responsibility');
			
									            
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
