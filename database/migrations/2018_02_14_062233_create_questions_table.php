<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent')->nullable($value = true)->unsigned();
            $table->integer('level')->unsigned();
            $table->integer('answer_to')->nullable($value = true)->unsigned();
            $table->string('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('questions');
    }
}
