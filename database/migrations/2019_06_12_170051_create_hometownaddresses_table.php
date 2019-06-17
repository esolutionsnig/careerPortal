<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHometownaddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hometownaddresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('landmarks')->nullable();
            $table->string('residential_area')->nullable();
            $table->string('house_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('suburb')->nullable();
            $table->string('town')->nullable();
            $table->string('district')->nullable();
            $table->string('home_phone')->nullable();
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
        Schema::dropIfExists('hometownaddresses');
    }
}
