<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experts')->insert([
            ['expert_id' => 1, 'name' => 'Ariadna Marcellina', 'username' => 'ariadna1', 'email_verified_at' => '2020-11-30 12:18:30', 'password' => 'ariadna123', 'address' => '2939 Hillcrest Lane', 'dob' => '23 January 2000', 'gender' => 'Female', 'rating' => 4.9, 'remember_token' => 'remembertoken1', 'created_at' => '2020-11-30 12:17:03', 'updated_at' => '2020-12-1 12:17:03'],
            ['expert_id' => 2, 'name' => 'Allegra Moran', 'username' => 'allegra2', 'email_verified_at' => '2020-12-1 12:18:30', 'password' => 'allegra123', 'address' => '2165 Heliport Loop', 'dob' => '6 May 2000', 'gender' => 'Female', 'rating' => 4.7, 'remember_token' => 'remembertoken2', 'created_at' => '2020-12-1 12:17:03', 'updated_at' => '2020-12-2 12:17:03'],
            ['expert_id' => 3, 'name' => 'Ouranos Curro', 'username' => 'ouranos3', 'email_verified_at' => '2020-12-2 12:18:30', 'password' => 'ouranos123', 'address' => '2632 Holly Street', 'dob' => '11 June 2000', 'gender' => 'Male', 'rating' => 4.8, 'remember_token' => 'remembertoken3', 'created_at' => '2020-12-2 12:17:03', 'updated_at' => '2020-12-3 12:17:03']
        ]);
    }
}
