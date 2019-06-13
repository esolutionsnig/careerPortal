<?php

use Illuminate\Database\Seeder;

class SchoolleavingcertificateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schoolleavingcertificates')->insert([
            'user_id' => 1,
            'school' => 'Stockbridge College, Lagos State, Nigeria',
            'year' => '2006',
            'result_1' => 'English Language - B1',
            'result_2' => 'Mathematics - B1',
            'result_3' => 'Physics - C4',
            'result_4' => 'Chemistry - C4',
            'result_5' => 'Biology - B1',
        ]);
    }
}
