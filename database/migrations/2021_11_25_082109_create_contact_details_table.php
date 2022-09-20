<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_details', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('conatct_header');
            $table->longText('conatct_header_text');
            $table->string('conatct_number');
            $table->string('conatct_number_image');
            $table->string('conatct_email');
            $table->string('conatct_email_image');
            $table->string('conatct_insta');
            $table->string('conatct_insta_image');
            $table->longText('conatct_register_office');
            $table->longText('conatct_register_adress1');
            $table->longText('conatct_register_adress2');
            $table->longText('conatct_register_adress3');
            $table->longText('conatct_ourlist');
            $table->longText('conatct_ourlist_text');
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
        Schema::dropIfExists('contact_details');
    }
}
