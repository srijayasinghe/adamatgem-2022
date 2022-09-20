<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessGoldensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_goldens', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('process_golden_header');
            $table->longText('process_golden_text');
            $table->string('color_1');
            $table->string('process_golden_image1');
            $table->string('color_2');
            $table->string('process_golden_image2');
            $table->string('color_3');
            $table->string('process_golden_image3');
            $table->string('color_4');
            $table->string('process_golden_image4');
            $table->string('color_5');
            $table->string('process_golden_image5');
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
        Schema::dropIfExists('process_goldens');
    }
}
