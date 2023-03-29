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
        //EUROPE
        DB::table('countries')->insert([
                'country_name' => 'United Kingdom',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1677660425/england_mv_u6mjsv.jpg',
                'code' => 'GB',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Albania',
                'image' => '',
                'code' => 'AL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Andorra',
                'image' => '',
                'code' => 'AD',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Antigua & Barbuda',
                'image' => '',
                'code' => 'AG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Armenia',
                'image' => '',
                'code' => 'AM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Austria',
                'image' => '',
                'code' => 'AT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Azerbaijan',
                'image' => '',
                'code' => 'AZ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Belarus',
                'image' => '',
                'code' => 'BY',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Belgium',
                'image' => '',
                'code' => 'BE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Bosnia & Herzegovina',
                'image' => '',
                'code' => 'BA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Bulgaria',
                'image' => '',
                'code' => 'BG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Croatia',
                'image' => '',
                'code' => 'HR',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Czechia',
                'image' => '',
                'code' => 'CZ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Denmark',
                'image' => '',
                'code' => 'DK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Estonia',
                'image' => '',
                'code' => 'EE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Faroe Islands',
                'image' => '',
                'code' => 'FO',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Finland',
                'image' => '',
                'code' => 'FI',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'France',
                'image' => '',
                'code' => 'FR',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Georgia',
                'image' => '',
                'code' => 'GE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Germany',
                'image' => '',
                'code' => 'DE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Gibraltar',
                'image' => '',
                'code' => 'GI',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Greece',
                'image' => '',
                'code' => 'GR',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Greenland',
                'image' => '',
                'code' => 'GL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Guernsey',
                'image' => '',
                'code' => 'GG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Hungary',
                'image' => '',
                'code' => 'HU',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Iceland',
                'image' => '',
                'code' => 'IS',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Ireland',
                'image' => '',
                'code' => 'IE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Isle of Man',
                'image' => '',
                'code' => 'IM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Italy',
                'image' => '',
                'code' => 'IT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Jersey',
                'image' => '',
                'code' => 'JE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Kosovo',
                'image' => '',
                'code' => 'XK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Latvia',
                'image' => '',
                'code' => 'LV',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Liechtenstein',
                'image' => '',
                'code' => 'LI',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Lithuania',
                'image' => '',
                'code' => 'LT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Luxembourg',
                'image' => '',
                'code' => 'LU',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Moldova',
                'image' => '',
                'code' => 'MD',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Monaco',
                'image' => '',
                'code' => 'MC',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Montenegro',
                'image' => '',
                'code' => 'ME',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Netherlands',
                'image' => '',
                'code' => 'NL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'North Macedonia',
                'image' => '',
                'code' => 'MK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Norway',
                'image' => '',
                'code' => 'NO',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Poland',
                'image' => '',
                'code' => 'PL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Portugal',
                'image' => '',
                'code' => 'PT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Romania',
                'image' => '',
                'code' => 'RO',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'San Marino',
                'image' => '',
                'code' => 'SM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Serbia',
                'image' => '',
                'code' => 'RS',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Slovakia',
                'image' => '',
                'code' => 'SK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Slovakia',
                'image' => '',
                'code' => 'SI',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Spain',
                'image' => '',
                'code' => 'ES',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Svalbard & Jan Mayen',
                'image' => '',
                'code' => 'SJ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Sweden',
                'image' => '',
                'code' => 'SE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Switzerland',
                'image' => '',
                'code' => 'CH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Ukraine',
                'image' => '',
                'code' => 'UA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Vatican City',
                'image' => '',
                'code' => 'VA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Åland Islands',
                'image' => '',
                'code' => 'AX',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        //ASIA
        DB::table('countries')->insert([
                'country_name' => 'Japan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680109610/UQrNeDUsFwNDA5som51RjgcBgwXeB0rD26oxNduqMTU_xvtnus.jpg',
                'code' => 'JP',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Bangladesh',
                'image' => '',
                'code' => 'BD',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Bhutan',
                'image' => '',
                'code' => 'BT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Brunei',
                'image' => '',
                'code' => 'BN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Cambodia',
                'image' => '',
                'code' => 'KH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'China',
                'image' => '',
                'code' => 'CN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Hong Kong',
                'image' => '',
                'code' => 'HK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'India',
                'image' => '',
                'code' => 'IN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Indonesia',
                'image' => '',
                'code' => 'ID',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Kazakhstan',
                'image' => '',
                'code' => 'KZ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Kyrgyzstan',
                'image' => '',
                'code' => 'KG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Laos',
                'image' => '',
                'code' => 'LA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Macao',
                'image' => '',
                'code' => 'MO',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Malaysia',
                'image' => '',
                'code' => 'MY',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Mongolia',
                'image' => '',
                'code' => 'MN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Myanmar',
                'image' => '',
                'code' => 'MM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Nepal',
                'image' => '',
                'code' => 'NP',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'North Korea',
                'image' => '',
                'code' => 'KP',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Pakistan',
                'image' => '',
                'code' => 'PK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Philippines',
                'image' => '',
                'code' => 'PH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Singapore',
                'image' => '',
                'code' => 'SG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'South Korea',
                'image' => '',
                'code' => 'KR',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Sri Lanka',
                'image' => '',
                'code' => 'LK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Taiwan',
                'image' => '',
                'code' => 'TW',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Tajikistan',
                'image' => '',
                'code' => 'TJ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Thailand',
                'image' => '',
                'code' => 'TH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Timor-Leste',
                'image' => '',
                'code' => 'TL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Turkmenistan',
                'image' => '',
                'code' => 'TM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Uzbekistan',
                'image' => '',
                'code' => 'UZ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Vietnam',
                'image' => '',
                'code' => 'VN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
        //Russia
        DB::table('countries')->insert([
                'country_name' => 'Russia',
                'image' => '',
                'code' => 'RU',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => '',
                'image' => '',
                'code' => '',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
            
        
    }
}
