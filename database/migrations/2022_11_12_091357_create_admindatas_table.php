<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdmindatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admindatas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->integer('number')->nullable();
            $table->string('picture')->nullable();
            $table->string('line')->nullable();
            $table->string('facebook')->nullable();
            $table->string('emall')->nullable();
            $table->string('address')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admindatas');
    }
}
