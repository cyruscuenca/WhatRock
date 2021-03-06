<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntryTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('entry_tag', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('entry_id')->unsigned();
          $table->integer('tag_id')->unsigned();
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
      //Schema::dropIfExists('entry_tag');
    }
}
