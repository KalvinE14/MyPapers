<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            ['notification_id' => 1, 'paper_id' => '1', 'message' => 'The requested paper has been accepted', 'created_at' => '2020-11-30 12:17:03', 'updated_at' => '2020-11-30 12:17:03'],
            ['notification_id' => 2, 'paper_id' => '1', 'message' => 'A paper has been uploaded by expert', 'created_at' => '2020-12-1 12:17:03', 'updated_at' => '2020-12-1 12:17:03'],
            ['notification_id' => 3, 'paper_id' => '2', 'message' => 'The requested paper has been accepted', 'created_at' => '2020-12-2 12:17:03', 'updated_at' => '2020-12-2 12:17:03']
        ]);
    }
}
