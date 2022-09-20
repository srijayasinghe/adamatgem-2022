<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenesisBodysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genesis_bodys', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('genesis_body_header1');
            $table->longText('genesis_body_header2');
            $table->longText('genesis_body_text');
            $table->string('genesis_body_image1');
            $table->longText('genesis_image1_header');
            $table->longText('genesis_image1_body');
            $table->string('genesis_body_image2');
            $table->longText('genesis_image2_header');
            $table->longText('genesis_image2_body');
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
        Schema::dropIfExists('genesis_bodys');
    }
}
