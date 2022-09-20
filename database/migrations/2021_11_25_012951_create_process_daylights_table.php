<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessDaylightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_daylights', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('process_daylights_image');
            $table->longText('process_daylights_header');
            $table->longText('process_daylights_text1');
            $table->longText('process_daylights_text2');
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
        Schema::dropIfExists('process_daylights');
    }
}
