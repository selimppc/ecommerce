<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('type')->nullable();
            $table->text('desc');
			$table->string('featured_image')->nullable();
			$table->string('featured_image_2')->nullable();
			$table->string('thumbnail')->nullable();
			$table->string('thumbnail_2')->nullable();
			$table->string('meta_title')->nullable();
			$table->string('meta_keyword')->nullable();
			$table->text('meta_desc');
            $table->enum('status', array(
                'active','inactive'
            ));
            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);
			$table->integer('sub_page_id',false,11);
			$table->integer('sort_order',false,11);

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
