<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessThresectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_thresections', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('process_center_header1');
            $table->longText('process_center_header2');
            $table->longText('process_center_header3');
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
        Schema::dropIfExists('process_thresections');
    }
}
