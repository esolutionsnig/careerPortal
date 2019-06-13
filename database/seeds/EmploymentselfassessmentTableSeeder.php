<?php

use Illuminate\Database\Seeder;

class EmploymentselfassessmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employmentselfassessments')->insert([
            'user_id' => 1,
            'interview_date' => '10-07-2018',
            'current_engagements' => 'None',
            'last_monthly_salary' => '150000',
            'minimum_salary_expectation' => '180000',
            'profile_summary' => 'None',
        ]);
    }
}
