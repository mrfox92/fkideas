<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 128);
            $table->string('slug', 128)->unique();
            $table->mediumText('excerpt');
            $table->text('description');
            $table->string('location', 128);
            $table->enum('status', ['PUBLICADO', 'BORRADOR'])->default('BORRADOR');
            $table->string('file', 128);
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('retails');
    }
}
