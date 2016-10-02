<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_tasks', function(Blueprint $table){
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');

            $table->integer('task_id')->unsigned()->nullable();
            $table->foreign('task_id')->references('id')
                ->on('tasks')->onDelete('cascade');

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
        //
    }
}
