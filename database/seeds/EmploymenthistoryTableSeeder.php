<?php

use Illuminate\Database\Seeder;

class EmploymenthistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employmenthistories')->insert([
            'user_id' => 1,
            'employer_name' => 'Integrated Cash Management Services Limited',
            'employer_address' => 'Plot 43, Ahmed Onibudo Street, Victoria Island, Lagos State, Nigeria',
            'employer_phone' => '01-2541256',
            'job_grade' => 'Grade 4',
            'job_function' => 'Software Developer',
            'start_date' => 'October 2018',
            'end_date' => 'Works Here',
            'monthly_income' => '180,000',
            'reason_for_leaving' => ' ',
        ]);
        DB::table('employmenthistories')->insert([
            'user_id' => 1,
            'employer_name' => 'ITEX Integrated Systems',
            'employer_address' => 'Victoria Island, Lagos State, Nigeria',
            'employer_phone' => '01-0741256',
            'job_grade' => 'Grade 3',
            'job_function' => 'Software Developer',
            'start_date' => 'April 2017',
            'end_date' => 'September 2018',
            'monthly_income' => '150,000',
            'reason_for_leaving' => 'Needed better challange',
        ]);
        DB::table('employmenthistories')->insert([
            'user_id' => 1,
            'employer_name' => 'XL Africa Group Limited',
            'employer_address' => 'Plot 883, Samuel Manuwa Street, Victoria Island, Lagos State, Nigeria',
            'employer_phone' => '01-0541256',
            'job_function' => 'Software Developer',
            'start_date' => 'January 2013',
            'end_date' => 'March 2017',
            'monthly_income' => '90,000',
            'reason_for_leaving' => 'Needed upgarde',
        ]);
    }
}
