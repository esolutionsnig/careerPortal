<?php

use Illuminate\Database\Seeder;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generals')->insert([
            'user_id' => 1,
            'computer_literacy' => 'Excellent',
            'competence_profile' => 'Coming soon',
            'personal_traits' => 'None',
        ]);
    }
}
