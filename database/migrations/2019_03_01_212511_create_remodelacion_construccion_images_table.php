<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemodelacionConstruccionImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remodelacion_construccion_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('path', 128);
            $table->unsignedInteger('remodelacion_id');
            $table->timestamps();
            $table->foreign('remodelacion_id')->references('id')->on('remodelacion_construccions')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remodelacion_construccion_images');
    }
}
