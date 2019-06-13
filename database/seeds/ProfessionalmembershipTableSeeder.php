<?php

use Illuminate\Database\Seeder;

class ProfessionalmembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professionalmemberships')->insert([
            'user_id' => 1,
            'association' => 'Computer Science Association of Nigeria',
            'status' => 'Active',
            'year_of_conferment' => '2019',
        ]);
    }
}
