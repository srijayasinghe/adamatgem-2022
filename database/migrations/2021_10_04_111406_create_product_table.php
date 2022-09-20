<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('id')->autoIncrement();

            $table->integer('category_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('Available_id')->nullable();
            $table->integer('shape_id')->nullable();
            $table->integer('clarity_id')->nullable();
            $table->integer('enhancement_id')->nullable();
            $table->integer('Variety_id')->nullable();
            $table->integer('gallery_id')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('value')->default(false);
            $table->boolean('solid')->default(false);
            $table->longText('color');       
            $table->string('product_name');
            $table->string('product_image');
            $table->integer('avalibility_status')->nullable();
            $table->integer('order_value')->nullable();
            $table->longText('product_description');
            $table->longText('product_dimensions');
            $table->longText('product_treatments');
            $table->longText('product_labreport');
            $table->integer('product_price');
            $table->longText('Stone_Weight_Description');
            $table->double('product_Weight');
            $table->longText('Shape_Cut');
            $table->longText('product_variety');
          

          
           
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
        Schema::dropIfExists('Product');
    }
}
