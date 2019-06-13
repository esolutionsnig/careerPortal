<?php

use Illuminate\Database\Seeder;

class FullselfdisclosureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fullselfdisclosures')->insert([
            'user_id' => 1,
            'description' => 'Description here',
            'your_response' => 'Coming soon',
            'additional_details' => 'None',
        ]);
    }
}
