<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ExpertTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(PaperTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
    }
}
