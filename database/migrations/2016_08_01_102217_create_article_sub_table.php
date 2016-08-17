<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('article_sub', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id')->nullable();
            $table->string('title')->nullable();
            
            $table->enum('status', array(
                'active','inactive'
            ));
            $table->string('image')->nullable();
            $table->text('desc');
            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);

            $table->timestamps();
        });
		
		Schema::table('article_sub', function($table) {
             $table->foreign('article_id')->references('id')->on('article');
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
