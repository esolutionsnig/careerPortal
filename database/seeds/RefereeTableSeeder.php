<?php

use Illuminate\Database\Seeder;

class RefereeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referees')->insert([
            'user_id' => 1,
            'name' => 'Jude Ochonganoko',
            'address' => 'Lekki Lagos',
            'phone_number' => '08025412563',
            'email_address' => 'jo@domain.com',
        ]);
        DB::table('referees')->insert([
            'user_id' => 1,
            'name' => 'Pearl Smith',
            'address' => 'Abuja Lagos',
            'phone_number' => '08015412563',
            'email_address' => 'ps@domain.com',
        ]);
        DB::table('referees')->insert([
            'user_id' => 1,
            'name' => 'Amaka Igwe',
            'address' => 'Owerri Lagos',
            'phone_number' => '07025412563',
            'email_address' => 'ai@domain.com',
        ]);
    }
}
