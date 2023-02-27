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
                'image' =>'https://res.cloudinary.com/dhmmkcidj/image/upload/v1677479646/UQrNeDUsFwNDA5som51RjgcBgwXeB0rD26oxNduqMTU_sl4u1e.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '英国',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
