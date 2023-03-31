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
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253000/%E3%82%A4%E3%82%AD%E3%82%99%E3%83%AA%E3%82%B9_hdnzw1.jpg',
                'code' => 'GB',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Albania',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253000/%E3%82%A2%E3%83%AB%E3%83%8F%E3%82%99%E3%83%8B%E3%82%A2_yiqzsx.jpg',
                'code' => 'AL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Andorra',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253000/%E3%82%A2%E3%83%B3%E3%83%88%E3%82%99%E3%83%A9_e7vuno.jpg',
                'code' => 'AD',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Antigua & Barbuda',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680255069/Antigua_Barbuda_qyrhj4.jpg',
                'code' => 'AG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Armenia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680255069/Armenia_txojjd.jpg',
                'code' => 'AM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Austria',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%AA%E3%83%BC%E3%82%B9%E3%83%88%E3%83%AA%E3%82%A2_xj9tt0.jpg',
                'code' => 'AT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Azerbaijan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253000/%E3%82%A2%E3%82%BB%E3%82%99%E3%83%AB%E3%83%8F%E3%82%99%E3%82%A4%E3%82%B7%E3%82%99%E3%83%A3%E3%83%B3_ld9vbw.jpg',
                'code' => 'AZ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Belarus',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253003/%E3%83%98%E3%82%99%E3%83%A9%E3%83%AB%E3%83%BC%E3%82%B7_kalchs.jpg',
                'code' => 'BY',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Belgium',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253003/%E3%83%98%E3%82%99%E3%83%AB%E3%82%AD%E3%82%99%E3%83%BC_ffhrtr.jpg',
                'code' => 'BE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Bosnia & Herzegovina',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680255068/Bosnia_Herzegovina_yg6qcb.jpg',
                'code' => 'BA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Bulgaria',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253382/%E3%83%95%E3%82%99%E3%83%AB%E3%82%AB%E3%82%99%E3%83%AA%E3%82%A2_ymutmj.webp',
                'code' => 'BG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Croatia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%AF%E3%83%AD%E3%82%A2%E3%83%81%E3%82%A2_xtp0cc.jpg',
                'code' => 'HR',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Czechia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%83%81%E3%82%A7%E3%82%B3_c79mxw.jpg',
                'code' => 'CZ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Denmark',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%83%86%E3%82%99%E3%83%B3%E3%83%9E%E3%83%BC%E3%82%AF_jfd6y8.jpg',
                'code' => 'DK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Estonia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%A8%E3%82%B9%E3%83%88%E3%83%8B%E3%82%A2_dzzj3u.jpg',
                'code' => 'EE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Faroe Islands',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253003/%E3%83%95%E3%82%A7%E3%83%AD%E3%83%BC%E8%AB%B8%E5%B3%B6_kbogsp.jpg',
                'code' => 'FO',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Finland',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253004/%E3%83%95%E3%82%A3%E3%83%B3%E3%83%A9%E3%83%B3%E3%83%88%E3%82%99_bkrb68.tiff',
                'code' => 'FI',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'France',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253003/%E3%83%95%E3%83%A9%E3%83%B3%E3%82%B9_ll5lgh.jpg',
                'code' => 'FR',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Georgia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%B7%E3%82%99%E3%83%A7%E3%83%BC%E3%82%B7%E3%82%99%E3%82%A2_fg7vte.jpg',
                'code' => 'GE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Germany',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%83%88%E3%82%99%E3%82%A4%E3%83%84_kgjy09.jpg',
                'code' => 'DE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Gibraltar',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%B7%E3%82%99%E3%83%95%E3%82%99%E3%83%A9%E3%83%AB%E3%82%BF%E3%83%AB_n9wrh5.jpg',
                'code' => 'GI',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Greece',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%AD%E3%82%99%E3%83%AA%E3%82%B7%E3%83%A3_tn8t1p.jpg',
                'code' => 'GR',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Greenland',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%AF%E3%82%99%E3%83%AA%E3%83%BC%E3%83%B3%E3%83%A9%E3%83%B3%E3%83%88%E3%82%99_irnji5.jpg',
                'code' => 'GL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Guernsey',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%AB%E3%82%99%E3%83%BC%E3%83%B3%E3%82%B7%E3%83%BC_n0bb2b.jpg',
                'code' => 'GG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Hungary',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%83%8F%E3%83%B3%E3%82%AB%E3%82%99%E3%83%AA%E3%83%BC_uyfh1s.jpg',
                'code' => 'HU',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Iceland',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253000/%E3%82%A2%E3%82%A4%E3%82%B9%E3%83%A9%E3%83%B3%E3%83%88%E3%82%99_lfzglk.jpg',
                'code' => 'IS',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Ireland',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680252999/%E3%82%A2%E3%82%A4%E3%83%AB%E3%83%A9%E3%83%B3%E3%83%88%E3%82%99_g5myf2.jpg',
                'code' => 'IE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Isle of Man',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253256/%E3%83%9E%E3%83%B3%E5%B3%B6_grmwhf.webp',
                'code' => 'IM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Italy',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253000/%E3%82%A4%E3%82%BF%E3%83%AA%E3%82%A2_anrci7.jpg',
                'code' => 'IT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Jersey',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680255069/Jersey_h7jgvw.jpg',
                'code' => 'JE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Kosovo',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%B3%E3%82%BD%E3%83%9B%E3%82%99_lo1pee.jpg',
                'code' => 'XK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Latvia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680255069/Latvia_js2lqf.jpg',
                'code' => 'LV',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Liechtenstein',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253005/%E3%83%AA%E3%83%92%E3%83%86%E3%83%B3%E3%82%B7%E3%83%A5%E3%82%BF%E3%82%A4%E3%83%B3_li05og.jpg',
                'code' => 'LI',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Lithuania',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253004/%E3%83%AA%E3%83%88%E3%82%A2%E3%83%8B%E3%82%A2_bdd2zq.jpg',
                'code' => 'LT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Luxembourg',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253008/%E3%83%AB%E3%82%AF%E3%82%BB%E3%83%B3%E3%83%95%E3%82%99%E3%83%AB%E3%82%AF_cksofd.jpg',
                'code' => 'LU',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Moldova',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680257056/%E3%83%A2%E3%83%AB%E3%83%88%E3%82%99%E3%83%8F%E3%82%99_kcxy3v.jpg',
                'code' => 'MD',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Monaco',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253004/%E3%83%A2%E3%83%8A%E3%82%B3_zwcfgr.webp',
                'code' => 'MC',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Montenegro',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253004/%E3%83%A2%E3%83%B3%E3%83%86%E3%83%8D%E3%82%AF%E3%82%99%E3%83%AD_aaxstz.jpg',
                'code' => 'ME',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Netherlands',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253353/%E3%82%AA%E3%83%A9%E3%83%B3%E3%82%BF%E3%82%99_trqqyb.webp',
                'code' => 'NL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'North Macedonia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253005/%E5%8C%97%E3%83%9E%E3%82%B1%E3%83%88%E3%82%99%E3%83%8B%E3%82%A2_nlxkj5.jpg',
                'code' => 'MK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Norway',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%83%8E%E3%83%AB%E3%82%A6%E3%82%A7%E3%83%BC_lamaiz.jpg',
                'code' => 'NO',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Poland',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253003/%E3%83%9B%E3%82%9A%E3%83%BC%E3%83%A9%E3%83%B3%E3%83%88%E3%82%99_er5nk4.jpg',
                'code' => 'PL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Portugal',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253003/%E3%83%9B%E3%82%9A%E3%83%AB%E3%83%88%E3%82%AB%E3%82%99%E3%83%AB_qj1b4s.jpg',
                'code' => 'PT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Romania',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253004/%E3%83%AB%E3%83%BC%E3%83%9E%E3%83%8B%E3%82%A2_h9a0vr.jpg',
                'code' => 'RO',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'San Marino',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253001/%E3%82%B5%E3%83%B3%E3%83%9E%E3%83%AA%E3%82%A2_tcezkq.jpg',
                'code' => 'SM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Serbia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%82%BB%E3%83%AB%E3%83%92%E3%82%99%E3%82%A2_mofpbn.jpg',
                'code' => 'RS',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Slovakia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%82%B9%E3%83%AD%E3%83%8F%E3%82%99%E3%82%AD%E3%82%99%E3%82%A2_sziiwc.jpg',
                'code' => 'SK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Slovenia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%82%B9%E3%83%AD%E3%83%98%E3%82%99%E3%83%8B%E3%82%A2_jqudru.jpg',
                'code' => 'SI',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Spain',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680253002/%E3%82%B9%E3%83%98%E3%82%9A%E3%82%A4%E3%83%B3_qce94u.jpg',
                'code' => 'ES',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Svalbard & JanMayen',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680252999/Svalbard_sf8vgk.jpg',
                'code' => 'SJ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Sweden',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680257896/%E3%82%B9%E3%82%A6%E3%82%A7%E3%83%BC%E3%83%86%E3%82%99%E3%83%B3_ayrnqs.jpg',
                'code' => 'SE',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Switzerland',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680257896/%E3%82%B9%E3%82%A4%E3%82%B9_pyvynj.jpg',
                'code' => 'CH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Ukraine',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680257896/%E3%82%A6%E3%82%AF%E3%83%A9%E3%82%A4%E3%83%8A_fob7pq.jpg',
                'code' => 'UA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Vatican City',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680257896/%E3%83%8F%E3%82%99%E3%83%81%E3%82%AB%E3%83%B3%E5%B8%82%E5%9B%BD_wijj6v.jpg',
                'code' => 'VA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Åland Islands',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680257896/%E3%82%AA%E3%83%BC%E3%83%A9%E3%83%B3%E3%83%88%E3%82%99_j4wutq.jpg',
                'code' => 'AX',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        //ASIA
        DB::table('countries')->insert([
                'country_name' => 'Japan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261478/%E6%97%A5%E6%9C%AC_ow5mcl.jpg',
                'code' => 'JP',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Bangladesh',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%83%8F%E3%82%99%E3%83%B3%E3%82%AF%E3%82%99%E3%83%A9%E3%83%86%E3%82%99%E3%83%83%E3%82%B7%E3%83%A5_lutfam.jpg',
                'code' => 'BD',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Bhutan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%83%95%E3%82%99%E3%83%BC%E3%82%BF%E3%83%B3_x4v9xp.jpg',
                'code' => 'BT',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Brunei',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%83%95%E3%82%99%E3%83%AB%E3%83%8D%E3%82%A4_c9kvme.jpg',
                'code' => 'BN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Cambodia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261475/%E3%82%AB%E3%83%B3%E3%83%9B%E3%82%99%E3%82%B7%E3%82%99%E3%82%A2_eocyxl.jpg',
                'code' => 'KH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'China',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261478/%E4%B8%AD%E5%9B%BD_tns7tk.jpg',
                'code' => 'CN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Hong Kong',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261477/%E9%A6%99%E6%B8%AF_bmdyt4.jpg',
                'code' => 'HK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'India',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261941/%E3%82%A4%E3%83%B3%E3%83%88%E3%82%99_tugeqf.jpg',
                'code' => 'IN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Indonesia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261475/%E3%82%A4%E3%83%B3%E3%83%88%E3%82%99%E3%83%8D%E3%82%B7%E3%82%A2_yd0pvn.jpg',
                'code' => 'ID',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Kazakhstan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261475/%E3%82%AB%E3%82%B5%E3%82%99%E3%83%95%E3%83%8B%E3%82%B9%E3%82%BF%E3%83%B3_urvwvi.jpg',
                'code' => 'KZ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Kyrgyzstan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261475/%E3%82%AD%E3%83%AB%E3%82%AD%E3%82%99%E3%82%B9_f8bzk6.jpg',
                'code' => 'KG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Laos',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261477/%E3%83%A9%E3%82%AA%E3%82%B9_cup3ky.jpg',
                'code' => 'LA',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Macao',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261477/%E3%83%9E%E3%82%AB%E3%82%AA_fbdy4p.jpg',
                'code' => 'MO',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Malaysia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261477/%E3%83%9E%E3%83%AC%E3%83%BC%E3%82%B7%E3%82%A2_djwonw.jpg',
                'code' => 'MY',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Mongolia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261477/%E3%83%A2%E3%83%B3%E3%82%B3%E3%82%99%E3%83%AB_bgwfsm.jpg',
                'code' => 'MN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Myanmar',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261477/%E3%83%9F%E3%83%A3%E3%83%B3%E3%83%9E%E3%83%BC_fysgua.jpg',
                'code' => 'MM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Nepal',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%83%8D%E3%83%8F%E3%82%9A%E3%83%BC%E3%83%AB_h6snue.jpg',
                'code' => 'NP',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'North Korea',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261478/%E5%8C%97%E6%9C%9D%E9%AE%AE_vjanfn.jpg',
                'code' => 'KP',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Pakistan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%83%8F%E3%82%9A%E3%82%AD%E3%82%B9%E3%82%BF%E3%83%B3_mmzp5t.jpg',
                'code' => 'PK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Philippines',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%83%95%E3%82%A3%E3%83%AA%E3%83%92%E3%82%9A%E3%83%B3_uwvvls.jpg',
                'code' => 'PH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Singapore',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261475/%E3%82%B7%E3%83%B3%E3%82%AB%E3%82%99%E3%83%9B%E3%82%9A%E3%83%BC%E3%83%AB_lwyaw0.jpg',
                'code' => 'SG',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'South Korea',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261477/%E9%9F%93%E5%9B%BD_wkqy3n.jpg',
                'code' => 'KR',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Sri Lanka',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261475/%E3%82%B9%E3%83%AA%E3%83%A9%E3%83%B3%E3%82%AB_bk46l8.jpg',
                'code' => 'LK',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Taiwan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261478/%E5%8F%B0%E6%B9%BE_nd1wtb.webp',
                'code' => 'TW',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Tajikistan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%82%BF%E3%82%B7%E3%82%99%E3%82%AD%E3%82%B9%E3%82%BF%E3%83%B3_atevps.jpg',
                'code' => 'TJ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Thailand',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261478/%E5%8F%B0%E6%B9%BE_nd1wtb.webp',
                'code' => 'TH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Timor-Leste',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261478/%E6%9D%B1%E3%83%86%E3%82%A3%E3%83%A2%E3%83%BC%E3%83%AB_bkoepw.jpg',
                'code' => 'TL',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Turkmenistan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%83%88%E3%83%AB%E3%82%AF%E3%83%A1%E3%83%8B%E3%82%B9%E3%82%BF%E3%83%B3_rxiqmr.jpg',
                'code' => 'TM',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Uzbekistan',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261475/%E3%82%A6%E3%82%B9%E3%82%99%E3%83%98%E3%82%99%E3%82%AD%E3%82%B9%E3%82%BF%E3%83%B3_mjgmvi.jpg',
                'code' => 'UZ',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
        DB::table('countries')->insert([
                'country_name' => 'Vietnam',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680261476/%E3%83%98%E3%82%99%E3%83%88%E3%83%8A%E3%83%A0_pmfp20.jpg',
                'code' => 'VN',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]);
            
        //Russia
        DB::table('countries')->insert([
                'country_name' => 'Russia',
                'image' => 'https://res.cloudinary.com/dhmmkcidj/image/upload/v1680262646/%E3%83%AD%E3%82%B7%E3%82%A2_emazyq.jpg',
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
