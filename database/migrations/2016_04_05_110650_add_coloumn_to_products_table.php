<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColoumnToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('customer_review', function (Blueprint $table) {

            $table->string('product_code')->nullable();
            $table->string('size')->nullable();
            $table->string('other_size')->nullable();

        });
    }
}
