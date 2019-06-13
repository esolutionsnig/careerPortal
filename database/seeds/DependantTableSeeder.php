<?php

use Illuminate\Database\Seeder;

class DependantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependants')->insert([
            'user_id' => 1,
            'dependant_name' => 'Gabriel Okokon',
            'relationship' => 'Friend',
            'gender' => 'Male',
        ]);
    }
}
