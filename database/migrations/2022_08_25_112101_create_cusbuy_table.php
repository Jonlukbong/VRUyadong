<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCusbuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusbuy', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nameproduct')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('price')->nullable();
            $table->string('picture')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusbuy');
    }
}
