<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('blog_item', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->unique();
			$table->unsignedInteger('blog_cat_id')->nullable();
            $table->enum('status', array(
                'active','inactive'
            ));            
            $table->text('desc');
			$table->string('meta_title')->nullable();
			$table->string('meta_keyword')->nullable();
			$table->text('meta_desc');
            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);

            $table->timestamps();
        });
		
		Schema::table('blog_item', function($table) {
             $table->foreign('blog_cat_id')->references('id')->on('blog_cat');
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
