<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenutypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('menu_type', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title')->nullable();
			$table->string('slug')->unique();
			
			$table->enum('type', array(
                'main','top','user','side','footer'
            ));
			$table->text('desc')->nullable();
						            
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
