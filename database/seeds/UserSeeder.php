<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Mizanur Rahaman',
            'email'=>'mizanur@gmail.com',
            'password'=>bcrypt('123456'),
            'user_id' => '171-15-1452',
            'department' => 'CSE',
            'phone_no' => '01749969029',
        ]);
    }
}
