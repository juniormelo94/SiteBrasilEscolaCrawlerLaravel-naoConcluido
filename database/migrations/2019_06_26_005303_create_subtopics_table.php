<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtopics', function (Blueprint $table) {
            $table->bigIncrements('id_subtopic');
            $table->integer('id_theme')->unsigned();
            $table->string('subtopic', 150);
            $table->string('link_subtopic', 50);
            $table->timestamps();
            $table->foreign('id_theme')
                ->references('id_theme')->on('themes');

            // link de ajuda para tabelas relacionadas:
            //https://www.youtube.com/watch?v=gc5LByf3nL4
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtopics');
    }
}
