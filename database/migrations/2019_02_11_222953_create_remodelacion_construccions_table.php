<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemodelacionConstruccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remodelacion_construccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 128);
            $table->string('slug', 128)->unique();
            $table->text('description');
            $table->string('location', 128);
            $table->enum('status', ['PUBLICADO', 'BORRADOR'])->default('BORRADOR');
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
        Schema::dropIfExists('remodelacion_construccions');
    }
}
