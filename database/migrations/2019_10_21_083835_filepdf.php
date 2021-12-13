<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Filepdf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('filepdf', function (Blueprint $table) {
          $table->bigIncrements('id')->unique();
          $table->string('nosurat')->unique();
          $table->string('nama');
          $table->string('fsurat');
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
        Schema::dropIfExists('filepdf');
    }
}
