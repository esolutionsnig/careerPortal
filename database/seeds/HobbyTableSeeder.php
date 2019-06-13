<?php

use Illuminate\Database\Seeder;

class HobbyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->insert([
            'user_id' => 1,
            'title' => 'Sports - Basketball',
        ]);
        DB::table('hobbies')->insert([
            'user_id' => 1,
            'title' => 'Listening to music',
        ]);
        DB::table('hobbies')->insert([
            'user_id' => 1,
            'title' => 'Reading',
        ]);
        DB::table('hobbies')->insert([
            'user_id' => 1,
            'title' => 'Traveliing',
        ]);
        DB::table('hobbies')->insert([
            'user_id' => 1,
            'title' => 'Networking',
        ]);
        DB::table('hobbies')->insert([
            'user_id' => 1,
            'title' => 'Party',
        ]);
    }
}
