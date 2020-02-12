<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title_uk');
            $table->text('title_en');
            $table->longText('text_uk');
            $table->longText('text_en');
            $table->text('meta_title_uk')->nullable();
            $table->text('meta_title_en')->nullable();
            $table->text('meta_description_uk')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_keywords_uk')->nullable();
            $table->text('meta_keywords_en')->nullable();
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
        Schema::dropIfExists('services');
    }
}
