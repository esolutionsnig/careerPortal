<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentselfassessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employmentselfassessments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('interview_date')->nullable();
            $table->string('current_engagements')->nullable();
            $table->string('last_monthly_salary')->nullable();
            $table->string('non_cash_incentives')->nullable();
            $table->string('minimum_salary_expectation')->nullable();
            $table->text('profile_summary')->nullable();
            $table->text('why_you')->nullable();
            $table->text('five_years_expectation')->nullable();
            $table->text('why_you_left')->nullable();
            $table->text('most_challenging')->nullable();
            $table->text('professional_challenge')->nullable();
            $table->text('job_accomplishments')->nullable();
            $table->text('what_you_offer')->nullable();
            $table->string('interviewed_by')->nullable();
            $table->string('interviewed_on')->nullable();
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
        Schema::dropIfExists('employmentselfassessments');
    }
}
