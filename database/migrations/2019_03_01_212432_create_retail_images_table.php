<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retail_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128);
            $table->string('path', 128);
            $table->unsignedInteger('retail_id');
            $table->timestamps();
            $table->foreign('retail_id')->references('id')->on('retails')
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
        Schema::dropIfExists('retail_images');
    }
}
