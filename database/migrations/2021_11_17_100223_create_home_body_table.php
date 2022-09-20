<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeBodyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_body', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('home_body_banner');
            $table->longText('home_body_banner_text1');
            $table->longText('home_body_text');
            $table->longText('home_body_content');
            $table->string('home_body_logo');
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
        Schema::dropIfExists('home_body');
    }
}
