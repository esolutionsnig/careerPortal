<?php

use Illuminate\Database\Seeder;

class HometownaddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hometownaddresses')->insert([
            'user_id' => 1,
            'landmarks' => 'Eke Ukwu Market',
            'residedntial_area' => 'Amala',
            'street_name' => 'Nwankwala',
            'suburb' => 'Umuewo',
            'town' => 'Amala',
            'district' => 'Ngos-Okpala',
        ]);
    }
}
