<?php

use Illuminate\Database\Seeder;

class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parents')->insert([
            'user_id' => 1,
            'father_name' => 'Ibeh Josaiah',
            'father_nationality' => 'Nigerian',
            'father_occupation' => 'Retired',
            'father_address' => 'Abuja',
            'father_phone' => '07058745896',
            'mother_name' => 'Ibeh Florence',
            'mother_maiden_name' => 'Oluchi',
            'mother_nationality' => 'Nigerian',
            'mother_occupation' => 'Trader',
            'mother_address' => 'Abuja',
            'mother_phone' => '070589632145',
        ]);
    }
}