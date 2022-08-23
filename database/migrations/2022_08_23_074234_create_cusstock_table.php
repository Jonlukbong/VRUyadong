<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCusstockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cusstock', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nameproduct')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('price')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cusstock');
    }
}
