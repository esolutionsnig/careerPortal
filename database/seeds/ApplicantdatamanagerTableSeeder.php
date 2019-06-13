<?php

use Illuminate\Database\Seeder;

class ApplicantdatamanagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applicantdatamanagers')->insert([
            'user_id' => 1,
            'previous_name' => 'Juden Omenka',
            'why_change_name' => 'Got adopted',
            'birth_date' => '10-06-1896',
            'birth_place' => 'Lagos',
            'nationality' => 'Nigerian',
            'gender' => 'Male',
            'marital_status' => 'Single',
            'number_of_kids' => 0,
            'phone_number' => '08025412563',
        ]);
    }
}