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
            ['paper_id' => 1, 'title' => 'CV for Internship', 'type' => 'Curriculum Vitae', 'requirement' => 'simple design', 'description' => 'include work experience and skills', 'status' => 'Pending', 'file' => 'list of skills.docx', 'preview' => 'previewpaper1.jpg', 'user_id' => 1],
            ['paper_id' => 2, 'title' => 'Samsung Seminar Brochure', 'type' => 'Brochure', 'requirement' => 'clear and easy understanding design', 'description' => 'include location and time', 'status' => 'Finished', 'file' => 'location and time.pdf', 'preview' => 'previewpaper2.jpg', 'user_id' => 1],
            ['paper_id' => 3, 'title' => 'School Competition Leaflet', 'type' => 'Leaflet', 'requirement' => 'interactive design', 'description' => 'include benefit and reward', 'status' => 'Pending', 'file' => 'list of rewards.docx', 'preview' => 'previewpaper3.jpg', 'user_id' => 2]
        ]);
    }
}
