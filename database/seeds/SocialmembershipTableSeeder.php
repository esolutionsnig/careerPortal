<?php

use Illuminate\Database\Seeder;

class SocialmembershipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('socialmemberships')->insert([
            'user_id' => 1,
            'name' => 'Knowledge Exchange Center',
            'date' => '2012 - Date',
            'position' => 'Facilitator',
            'status' => 'Active',
        ]);
    }
}
