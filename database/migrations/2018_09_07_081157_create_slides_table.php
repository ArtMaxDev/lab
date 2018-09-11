<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_uk');
            $table->string('title_en');
            $table->string('description_uk');
            $table->string('description_en');
            $table->string('link');
            $table->string('image');
            $table->string('image_alt')->nullable();
            $table->unsignedInteger('style')->default(0);
            $table->unsignedInteger('status')->default(0);
            $table->unsignedInteger('sorting')->default(0);
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
        Schema::dropIfExists('slides');
    }
}
