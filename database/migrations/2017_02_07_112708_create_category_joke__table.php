<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryJokeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('category_joke')) {

            Schema::create('category_joke', function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->integer('category_id')->unsigned();
                $table->integer('joke_id')->unsigned();

                $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

                $table->foreign('joke_id')
                    ->references('id')
                    ->on('jokes')
                    ->onDelete('cascade');

                $table->primary(['category_id', 'joke_id']);

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_joke');
    }
}
