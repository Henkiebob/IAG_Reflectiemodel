<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('feedback', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('reflection_id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->string('title');
          $table->text('messages');
          $table->boolean('read');
          $table->timestamps();
      });
      Schema::table('feedback', function (Blueprint $table) {
          $table->foreign('reflection_id')->references('id')->on('reflections');
          $table->foreign('user_id')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
