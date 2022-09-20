<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessFivesectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_fivesections', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('process_new_banner');
            $table->longText('attention_italic');
            $table->longText('process_new_body_text1');
            $table->longText('process_new_body_text2');
            $table->string('process_new_body_image');

            $table->string('process_new_icon1');
            $table->string('process_new_icon2');
            $table->longText('process_new_icon_text');
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
        Schema::dropIfExists('process_fivesections');
    }
}
