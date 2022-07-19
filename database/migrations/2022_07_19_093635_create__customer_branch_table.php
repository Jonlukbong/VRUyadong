<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_customer_branch', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();  
            $table->string('namestore')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('_customer_branch');
    }
}
