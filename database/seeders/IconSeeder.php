<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public static $texts = [
        '/img/facebook-icon.png',
        '/img/instagramm-icon.png',
        '/img/youtube-icon.png',

    ];

    public function run()
    {
        foreach (self::$texts as $text) {
            DB::table('icons')->insert([
                'link_path' => '#',
                'img_path' => $text
            ]);
        }
    }
}
