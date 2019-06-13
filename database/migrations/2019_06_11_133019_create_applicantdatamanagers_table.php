<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantdatamanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicantdatamanagers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('previous_name')->nullable();
            $table->string('why_change_name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('birth_certificate')->nullable();
            $table->string('nationality')->nullable();
            $table->string('id_card')->nullable();
            $table->string('gender')->nullable();
            $table->string('physical_defects')->nullable();
            $table->string('region')->nullable();
            $table->string('tribe')->nullable();
            $table->string('tribal_chief')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('number_of_kids')->nullable();
            $table->string('religion')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('complexion')->nullable();
            $table->string('color_eyes')->nullable();
            $table->string('color_hair')->nullable();
            $table->string('thumbprint_right')->nullable();
            $table->string('thumbprint_left')->nullable();
            $table->string('passport_image')->nullable();
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
        Schema::dropIfExists('applicantdatamanagers');
    }
}
