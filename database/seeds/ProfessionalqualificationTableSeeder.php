<?php

use Illuminate\Database\Seeder;

class ProfessionalqualificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professionalqualifications')->insert([
            'user_id' => 1,
            'institution' => 'Andela Bootcamp Nigeria.',
            'date_of_attendance' => '2017',
            'qualification' => 'Android Development Certificate',
        ]);
        DB::table('professionalqualifications')->insert([
            'user_id' => 1,
            'institution' => 'Oracle Bootcamp Nigeria.',
            'date_of_attendance' => '2018',
            'qualification' => 'Database For Developers Certificate',
        ]);
    }
}
