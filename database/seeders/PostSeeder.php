<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        static $order = 1;
        for ($i = 0; $i <= 200; $i++) {
            DB::table('posts')->insert([
                'title' => Str::random(20),
                'description' => Str::random(30),
                'status' => 1,
                'Publish_date' => date('Y-m-d'),
                'user_id' => $order++,
                'category_id' => rand(1, 4)
            ]);
        }
    }
}
