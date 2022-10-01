<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDealerordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealerorders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nameproduct')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('price')->nullable();
            $table->string('picture')->nullable();
            $table->integer('idproduct')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('status')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dealerorders');
    }
}
