<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_missions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('title_en');
            $table->string('title_ru');
            $table->string('title_arm');
            $table->text('text_en');
            $table->text('text_ru');
            $table->text('text_arm');
            $table->string('link_text_en');
            $table->string('link_text_ru');
            $table->string('link_text_arm');
            $table->string('url')->default('#');
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
        Schema::dropIfExists('our_missions');
    }
}
