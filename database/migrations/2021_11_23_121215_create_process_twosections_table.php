<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessTwosectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_twosections', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('process_sub_header');
            $table->longText('process_sub_header2');
            $table->longText('process_sub_body');
            $table->string('process_sub_image1');
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
        Schema::dropIfExists('process_twosections');
    }
}
