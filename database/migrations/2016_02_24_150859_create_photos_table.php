<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->string('image');
            $table->integer('owner_id');
            $table->integer('gallery_id');
            $table->timestamps();
            $table->index('owner_id', 'cfx_owner_id');
            $table->index('gallery_id', 'cfx_gallery_id');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('gallery_id')->references('id')->on('galleries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photos');
    }
}
