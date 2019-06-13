<?php

use Illuminate\Database\Seeder;

class GuardianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guardians')->insert([
            'user_id' => 1,
            'guardian_name' => 'Ibeh David',
            'guardian_nationality' => 'Nigerian',
            'guardian_occupation' => 'Business Man',
            'guardian_phone' => '070589632145',
        ]);
    }
}