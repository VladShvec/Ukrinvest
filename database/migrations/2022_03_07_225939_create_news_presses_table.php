<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsPressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_presses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('title_arm');
            $table->string('data_en');
            $table->string('data_ru');
            $table->string('data_arm');
            $table->string('text_en');
            $table->string('text_ru');
            $table->string('text_arm');
            $table->string('img')->nullable();
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
        Schema::dropIfExists('news_presses');
    }
}
