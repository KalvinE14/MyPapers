<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['user_id' => 1, 'name' => 'John Doe', 'username' => 'johndoe1', 'email_verified_at' => '2020-10-30 12:18:30', 'password' => 'johndoe123', 'address' => 'Avenue Street 21', 'dob' => '23 January 2000', 'gender' => 'Female', 'remember_token' => 'remembertoken1', 'created_at' => '2020-10-30 12:17:03', 'updated_at' => '2020-10-31 12:17:03'],
            ['user_id' => 2, 'name' => 'Christian Doe', 'username' => 'christiandoe2', 'email_verified_at' => '2020-10-31 12:18:30', 'password' => 'christiandoe123', 'address' => 'Palm Sweet Street 21', 'dob' => '6 May 2000', 'gender' => 'Male', 'remember_token' => 'remembertoken2', 'created_at' => '2020-11-1 12:17:03', 'updated_at' => '2020-11-2 12:17:03'],
            ['user_id' => 3, 'name' => 'Vanessa Smith', 'username' => 'vanessasmith3', 'email_verified_at' => '2020-11-1 12:18:30', 'password' => 'vanessasmith123', 'address' => 'Sweet Water Street 33', 'dob' => '11 June 2000', 'gender' => 'Female', 'remember_token' => 'remembertoken3', 'created_at' => '2020-11-2 12:17:03', 'updated_at' => '2020-11-3 12:17:03']
        ]);
    }
}
