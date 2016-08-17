<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_comment', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('blog_item_id')->nullable();
            $table->enum('status', array(
                'active','inactive','ban','review'
            ));            
            $table->text('comment');
			$table->string('name')->nullable();
			$table->string('email')->nullable();
			
            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);

            $table->timestamps();
        });
		
		Schema::table('blog_comment', function($table) {
             $table->foreign('blog_item_id')->references('id')->on('blog_item');
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
