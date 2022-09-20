<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSelectUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_select_us', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('home_selectus_logo');
            $table->longText('home_selectus_header');
            $table->longText('home_selectus_body');
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
        Schema::dropIfExists('home_select_us');
    }
}
