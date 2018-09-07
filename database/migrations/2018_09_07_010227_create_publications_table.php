<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_uk');
            $table->string('title_en');
            $table->text('description_uk');
            $table->text('description_en');
            $table->string('image');
            $table->string('image_alt')->nullable();
            $table->string('meta_title_uk')->nullable();
            $table->string('meta_title_en')->nullable();
            $table->string('meta_description_uk')->nullable();
            $table->string('meta_description_en')->nullable();
            $table->string('meta_keywords_uk')->nullable();
            $table->string('meta_keywords_en')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('publications');
    }
}
