<?php

use Illuminate\Database\Seeder;

class SportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sports')->insert([
            'user_id' => 1,
            'type_of_game' => 'Basketball',
            'club' => 'Gbagada Stormers',
            'date' => '2010 - Date',
            'status' => 'Active',
        ]);
        DB::table('sports')->insert([
            'user_id' => 1,
            'type_of_game' => 'Football',
            'club' => 'Manchester United',
            'date' => '2002 - Date',
            'status' => 'Active',
        ]);
    }
}