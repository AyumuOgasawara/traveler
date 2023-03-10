<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ayumu Ogasawara',
            'email' => 'ogasaayumu0114@gmail.com',
            'password' => Hash::make('Ayumusan'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Anna',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('Annasan'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
