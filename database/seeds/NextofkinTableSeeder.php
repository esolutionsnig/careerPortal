<?php

use Illuminate\Database\Seeder;

class NextofkinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nextofkins')->insert([
            'user_id' => 1,
            'name' => 'Ibeh David O',
            'relationship' => 'Sibling',
            'office_address' => 'Barikisu Iyede Road',
            'office_phone' => '08025417856',
        ]);
    }
}