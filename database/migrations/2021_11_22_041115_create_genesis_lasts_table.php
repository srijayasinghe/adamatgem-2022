<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenesisLastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genesis_lasts', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('genesis_lasts_header');
            $table->longText('genesis_lasts_text1');
            $table->longText('genesis_lasts_text2');
            $table->longText('genesis_lasts_text3');
            $table->longText('genesis_lasts_text4');
            $table->longText('genesis_lasts_text5');
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
        Schema::dropIfExists('genesis_lasts');
    }
}
