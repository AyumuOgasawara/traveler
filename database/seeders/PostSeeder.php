<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'title' => '日本の食事',
                'body' => '日本の料理「和食」はすごく美味しいです。',
                'user_id' => 1,
                'category_id' => 1,
                'country_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
                'title' => '東京タワー',
                'body' => '東京タワーは夜になるとすごき綺麗です。',
                'user_id' => 2,
                'category_id' => 2,
                'country_id' => 1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
                'title' => 'Big Ben',
                'body' => 'イギリスの象徴であるBig Benはテムズ川の横にあります。',
                'user_id' => 1,
                'category_id' => 2,
                'country_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
