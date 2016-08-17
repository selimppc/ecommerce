<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('menu_type_id')->nullable();
			$table->string('name')->unique();
			$table->string('slug')->nullable();
			$table->string('alias')->nullable();
			$table->string('url')->nullable();
			
			$table->enum('type', array(
                'url','ext'
            ));
			
			$table->enum('status', array(
                'active','inactive'
            ));
			
			$table->unsignedInteger('parent')->nullable();
			
			$table->enum('ext_name', array(
                'skill','team','article','social_icon','blog','gallery','slider'
            ));
			
			$table->unsignedInteger('order')->nullable();
			$table->text('desc');
			            
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
