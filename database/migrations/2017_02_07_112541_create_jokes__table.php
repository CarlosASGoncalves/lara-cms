<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJokesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('jokes')) {

            Schema::create('jokes', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->longText('joketext');
                $table->date('jokedate');

                $table->integer('author_id')->unsigned();
                $table->foreign('author_id')
                    ->references('id')
                    ->on('authors')
                    ->onDelete('cascade');

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
        Schema::drop('jokes');
    }
}
