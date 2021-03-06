<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comments', function(Blueprint $table) {
      $table->increments('id');
      $table->string('body');
      $table->integer('user_id');//associate with a user
      $table->integer('attraction_id');//associate with an attraction
      $table->integer('rating');//rating assigned to attraction
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
        Schema::dropIfExists('comments');
    }
}
