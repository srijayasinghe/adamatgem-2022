<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenesisEndsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genesis_ends', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('genesis_ends_text1');
            $table->longText('genesis_ends_text2');
            $table->longText('genesis_ends_text3');
            $table->string('genesis_ends_image1');
            $table->longText('genesis_image1_text1');
            $table->longText('genesis_image1_text2');
            $table->string('genesis_ends_image2');
            $table->longText('genesis_image2_text1');
            $table->longText('genesis_image2_text2');
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
        Schema::dropIfExists('genesis_ends');
    }
}
