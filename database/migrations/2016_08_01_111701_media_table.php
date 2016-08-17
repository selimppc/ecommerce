<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
			$table->string('file_name')->nullable();
			$table->string('thumbnail')->nullable();
			
			$table->enum('type', array(
                'image','pdf','doc'
            ));
			$table->string('alt_text')->nullable();
			$table->string('url')->nullable();
			            
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
