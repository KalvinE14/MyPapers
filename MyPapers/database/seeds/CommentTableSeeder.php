<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['comment_id' => 1, 'user_comment' => true, 'expert_comment' => false, 'paper_id' => 2, 'comment' => 'Hai saya ingin membuat brosur', 'created_at' => '2020-10-2 10:18:30', 'updated_at' => null],
            ['comment_id' => 2, 'user_comment' => false, 'expert_comment' => true, 'paper_id' => 2, 'comment' => 'Oke', 'created_at' => '2020-10-2 10:28:00', 'updated_at' => null],
            ['comment_id' => 3, 'user_comment' => true, 'expert_comment' => false, 'paper_id' => 3, 'comment' => 'Halo', 'created_at' => '2020-12-31 11:54:30', 'updated_at' => null],
        ]);
    }
}
