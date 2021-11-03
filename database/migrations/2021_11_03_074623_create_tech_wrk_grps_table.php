<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechWrkGrpsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tech_wrk_grps', function (Blueprint $table) {
      $table->id();
      $table->integer('user_id');
      $table->String('position');
      $table->String('sector');
      $table->String('other_title')->nullable();
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
    Schema::dropIfExists('tech_wrk_grps');
  }
}
