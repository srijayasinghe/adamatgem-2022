<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessForsectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_forsections', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('process_center_banner');
            $table->longText('process_center_banner_text');
            $table->longText('process_center_text1');
            $table->longText('process_center_text2');
            $table->longText('process_center_text3');
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
        Schema::dropIfExists('process_forsections');
    }
}
