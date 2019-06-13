<?php

use Illuminate\Database\Seeder;

class BankingdetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bankingdetails')->insert([
            'user_id' => 1,
            'bank_name' => 'Guaranty Trust Bank Plc',
            'account_number' => '0037195222',
            'account_status' => 'Active',
            'bvn_number' => '001236547896325',
        ]);
        DB::table('bankingdetails')->insert([
            'user_id' => 1,
            'bank_name' => 'Diamond Bank Plc',
            'account_number' => '0037195111',
            'account_status' => 'Active',
            'bvn_number' => '001236547896325',
        ]);
        DB::table('bankingdetails')->insert([
            'user_id' => 1,
            'bank_name' => 'EcoBank Plc',
            'account_number' => '0037195333',
            'account_status' => 'Active',
            'bvn_number' => '001236547896325',
        ]);
    }
}
