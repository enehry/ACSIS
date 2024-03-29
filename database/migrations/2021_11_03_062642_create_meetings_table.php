<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('meetings', function (Blueprint $table) {
      $table->id();
      $table->string('who');
      $table->string('what');
      $table->string('when');
      $table->string('where');
      $table->string('why');
      $table->string('description');
      $table->string('how');
      $table->integer('user_id');
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
    Schema::dropIfExists('meetings');
  }
}
