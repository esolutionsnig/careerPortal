<?php

use Illuminate\Database\Seeder;

class NationalserviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalservices')->insert([
            'user_id' => 1,
            'place_of_assignment' => 'Lagos State',
            'year' => '2014',
            'job_function' => 'Computer Teaching',
        ]);
    }
}
