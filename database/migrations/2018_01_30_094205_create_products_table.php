<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SKU', 20)->nullable();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->string('sub_title', 255);
            $table->text('description');
            $table->double('regular_price', 8, 2);
            $table->double('sale_price', 8, 2);
            $table->integer('avg_rate')->default(0);
            $table->integer('tax_id')->default(0)->comment('0=no tax, +ve=tax excluded');
            $table->integer('user_id');
            $table->integer('language_id');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('products');
    }
}
