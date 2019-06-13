<?php

use Illuminate\Database\Seeder;

class AcademiceducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academiceducations')->insert([
            'user_id' => 1,
            'institution' => 'Yaba College Of Education, Yaba, Lagos State, Nigeria.',
            'date_of_attendance' => '2010 - 2013',
            'qualification' => 'HND Computer Science',
        ]);
        DB::table('academiceducations')->insert([
            'user_id' => 1,
            'institution' => 'The Polytechnic Ile-Ife, Osun State, Nigeria.',
            'date_of_attendance' => '2007 - 2009',
            'qualification' => 'OND Computer Science',
        ]);
        DB::table('academiceducations')->insert([
            'user_id' => 1,
            'institution' => 'Stockbridge College, Lagos State, Nigeria.',
            'date_of_attendance' => '2001 - 2006',
            'qualification' => 'Senior School Certificate Examination',
        ]);
        DB::table('academiceducations')->insert([
            'user_id' => 1,
            'institution' => 'Community Central School, Amala, Imo State, Nigeria.',
            'date_of_attendance' => '1993 - 1999',
            'qualification' => 'First School Leaving Certificate',
        ]);
    }
}
