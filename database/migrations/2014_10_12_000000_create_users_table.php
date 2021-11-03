<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('fname');
      $table->String('lname');
      $table->String('mname')->nullable();
      $table->date('bday');
      $table->enum('sex', ['Male', 'Female']);
      $table->String('street')->nullable();
      $table->String('brgy')->nullable();
      $table->String('city');
      $table->String('province');
      $table->string('email')->unique();
      $table->string('avatar')->nullable();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->enum('role', ['super admin', 'admin', 'stakeholder']);
      $table->rememberToken();
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
    Schema::dropIfExists('users');
  }
}
