<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('product_category_id')->nullable();
			$table->unsignedInteger('product_group_id')->nullable();
			$table->unsignedInteger('product_subgroup_id')->nullable();			
			
			$table->string('title')->unique();
			$table->string('slug')->unique();
			
			$table->text('short_description');
			$table->text('long_description');
			
			$table->enum('status', array(
                'active','inactive'
            ));
			
			$table->text('sku');
			
			$table->enum('class',array(
					'Product','Serice','Soft copy'
			));
			
			$table->string('group')->nullable();
			$table->string('sell_rate')->nullable();
			$table->string('cost_price')->nullable();
			$table->string('sell_unit')->nullable();
			$table->string('sell_unit_quantity')->nullable();
			$table->string('stock_unit')->nullable();
			$table->string('stock_unit_quantity')->nullable();
			
			$table->enum('is_price_vary',array(
					'no','yes'
			));
			$table->enum('is_featured',array(
				'No','Yes'
			));
			
			$table->string('image')->nullable();
			$table->string('thumb')->nullable();
			$table->string('brand')->nullable();
			$table->string('seats')->nullable();
			$table->string('voltage')->nullable();
			
			$table->text('features');
			$table->string('videos')->nullable();
			$table->unsignedInteger('sort_order')->nullable();
			$table->unsignedInteger('preorder')->nullable();
			$table->unsignedInteger('before_price')->nullable();
			
			$table->string('product_code')->nullable();
			$table->string('size')->nullable();
			$table->string('other_size')->nullable();
			$table->string('meta_title')->nullable();
			$table->string('delivery_info')->nullable();
			
						            
            $table->integer('created_by', false, 11);
            $table->integer('updated_by', false, 11);

            $table->timestamps();
        });
		
		Schema::table('product', function($table) {
             $table->foreign('product_group_id')->references('id')->on('groups');
        });
		
		Schema::table('product', function($table) {
             $table->foreign('product_subgroup_id')->references('id')->on('product_subgroup');
        });
		
		Schema::table('product', function($table) {
             $table->foreign('product_category_id')->references('id')->on('product_category');
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
