<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('text_en')->nullable();
            $table->string('text_ru')->nullable();
            $table->string('text_arm')->nullable();
            $table->string('page_id')->nullable();
            $table->string('url')->default('#')->nullable();
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
        Schema::dropIfExists('headers');
    }
}
