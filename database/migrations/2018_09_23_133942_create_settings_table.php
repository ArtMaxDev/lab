<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('address_uk')->nullable();
            $table->string('address_en')->nullable();
            $table->string('skype')->nullable();
            $table->string('facebook')->nullable();
            $table->string('google')->nullable();
            $table->string('linkedin')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_keywords_en')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
