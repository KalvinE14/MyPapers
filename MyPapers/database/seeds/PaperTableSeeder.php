<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('papers')->insert([
            ['paper_id' => 1, 'title' => 'CV for Internship', 'type' => 'Curriculum Vitae', 'requirement' => 'simple design', 'description' => 'include work experience and skills', 'status' => 'Waiting', 'file' => 'list of skills.docx', 'preview' => 'previewpaper1.png', 'user_id' => 1, 'expert_id' => null,  'created_at' => '2020-10-30 12:18:30', 'updated_at' => '2020-10-30 14:18:30'],
            ['paper_id' => 2, 'title' => 'Samsung Seminar Brochure', 'type' => 'Brochure', 'requirement' => 'clear and easy understanding design', 'description' => 'include location and time', 'status' => 'Pending', 'file' => 'location and time.pdf', 'preview' => 'previewpaper2.jpg', 'user_id' => 1, 'expert_id' => 1, 'created_at' => '2020-09-30 10:18:30', 'updated_at' => '2020-09-30 17:18:30'],
            ['paper_id' => 3, 'title' => 'School Competition Leaflet', 'type' => 'Leaflet', 'requirement' => 'interactive design', 'description' => 'include benefit and reward', 'status' => 'Finished', 'file' => 'list of rewards.docx', 'preview' => 'previewpaper3.jpg', 'user_id' => 2, 'expert_id' => 2, 'created_at' => '2020-12-30 11:54:30', 'updated_at' => '2020-12-30 20:54:30']
        ]);
    }
}
