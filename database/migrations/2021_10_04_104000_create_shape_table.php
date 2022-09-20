<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShapeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shape', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            // $table->integer('product_id');
            $table->longText('shape_name');
            $table->string('shape_image');
            $table->longText('shape_description');
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
        Schema::dropIfExists('Shape');
    }
}
