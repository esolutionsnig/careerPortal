<?php

use Illuminate\Database\Seeder;

class ResidentialaddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residentialaddresses')->insert([
            'user_id' => 1,
            'landmarks' => 'Domino Pizza Gbagada',
            'residedntial_area' => 'Gbagada Phase II',
            'house_number' => '08',
            'street_name' => 'Gbagada Road',
            'suburb' => 'Muritala',
            'town' => 'Gbagada',
            'district' => 'Kosofe',
            'past_residential_address' => 'Plot 6, Aina Close, Gbagada',
        ]);
    }
}