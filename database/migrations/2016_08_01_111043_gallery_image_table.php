<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GalleryImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('gal_image', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('product_id');
			$table->string('name')->nullable();
			$table->string('slug')->nullable();
			$table->string('image')->nullable();			
			$table->string('thumbnail')->nullable();
			$table->integer('status');
			            
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
