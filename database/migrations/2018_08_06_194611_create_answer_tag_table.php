<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_tag', function ($table) {
            $table->unsignedInteger('answer_id')->references('id')->on('answers')->onDelete('cascade');
            $table->unsignedInteger('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->primary(['answer_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //Schema::table('answer_tag', function($table) {
      //$table->dropForeign('answer_id');
      //$table->dropForeign('tag_id');
      //});

    }
}
