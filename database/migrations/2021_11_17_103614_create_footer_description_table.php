<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_description', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('footer_description');
            $table->longText('footer_logo1');
            $table->longText('footer_logo2');
            $table->longText('footer_logo3');
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
        Schema::dropIfExists('footer_description');
    }
}
