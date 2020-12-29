<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['admin_id' => 1, 'name' => 'Alvin Settler', 'username' => 'alvin1', 'email_verified_at' => '2020-10-30 12:18:30', 'password' => 'alvin123', 'address' => '3784 Boundary Street', 'dob' => '2 January 1983', 'gender' => 'Male', 'remember_token' => 'remembertoken1', 'created_at' => '2020-10-30 12:17:03', 'updated_at' => '2020-11-1 12:17:03'],
            ['admin_id' => 2, 'name' => 'Carrie Coates', 'username' => 'carrie2', 'email_verified_at' => '2020-11-1 12:18:30', 'password' => 'carrie123', 'address' => '3800 Rodney Street', 'dob' => '1 May 2000', 'gender' => 'Female', 'remember_token' => 'remembertoken2', 'created_at' => '2020-11-1 12:17:03', 'updated_at' => '2020-11-2 12:17:03'],
            ['admin_id' => 3, 'name' => 'Ricky Hanlon', 'username' => 'ricky3', 'email_verified_at' => '2020-11-2 12:18:30', 'password' => 'ricky123', 'address' => '1160 Grim Avenue', 'dob' => '5 June 2000', 'gender' => 'Male', 'remember_token' => 'remembertoken3', 'created_at' => '2020-11-2 12:17:03', 'updated_at' => '2020-11-3 12:17:03']
        ]);
    }
}
