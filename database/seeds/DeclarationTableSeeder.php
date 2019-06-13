<?php

use Illuminate\Database\Seeder;

class DeclarationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('declarations')->insert([
            'user_id' => 1,
            'signature' => '1028415152',
            'date' => '10-05-2019',
            'name_witness' => 'Ishola Hakeem',
            'witness_phone_number' => '07058745241',
            'witness_date' => '10-05-2019',
        ]);
    }
}
