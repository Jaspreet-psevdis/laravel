<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSideImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('side_image', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('desktop_image')->nullable();
            $table->longText('alt_text_desktop_image')->nullable();
            $table->longText('mobile_image')->nullable();
            $table->longText('alt_text_mobile_image')->nullable();
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
        Schema::dropIfExists('side_image');
    }
}
