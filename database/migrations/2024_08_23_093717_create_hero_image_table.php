<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hero_image', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('desktop_image')->nullable();
            $table->longText('alt_text_desktop_image')->nullable();
            $table->longText('mobile_image')->nullable();
            $table->longText('alt_text_mobile_image')->nullable();
            $table->longText('heading')->nullable();
            $table->longText('link')->nullable();
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
        Schema::dropIfExists('hero_image');
    }
}
