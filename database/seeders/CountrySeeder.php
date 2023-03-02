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
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1677634872/yr5k7jhz5xgohutrwaga.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '英国',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1677660425/england_mv_u6mjsv.jpg',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
    }
}
