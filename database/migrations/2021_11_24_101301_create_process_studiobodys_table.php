<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessStudiobodysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process_studiobodys', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->longText('process_studios_slider_headertext1');
            $table->longText('process_studios_slider_headertext2');
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
        Schema::dropIfExists('process_studiobodys');
    }
}
