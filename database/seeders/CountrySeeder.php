<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
                'country_name' => '日本',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1677479646/UQrNeDUsFwNDA5som51RjgcBgwXeB0rD26oxNduqMTU_sl4u1e.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '英国',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1677576147/%E3%82%BF%E3%82%99%E3%82%A6%E3%83%B3%E3%83%AD%E3%83%BC%E3%83%88%E3%82%99_4_dzbcim.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
