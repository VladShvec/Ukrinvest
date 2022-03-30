<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static $titlesArray = [
        ['title_en' => 'Smart city & trafic control',
            'title_ru' => 'Умный город и управление дорожным движением',
            'title_arm' => 'Խելացի քաղաք և երթևեկության վերահսկում',
            'url' => '/img/first_slide.jpg'
        ],
        ['title_en' => 'Smart city & trafic control',
            'title_ru' => 'Умный город и управление дорожным движением',
            'title_arm' => 'Խելացի քաղաք և երթևեկության վերահսկում',
            'url' => '/img/second_slide.jpg'
        ],
        ['title_en' => 'Smart city & trafic control',
            'title_ru' => 'Умный город и управление дорожным движением',
            'title_arm' => 'Խելացի քաղաք և երթևեկության վերահսկում',
            'url' => '/img/thirth_slide.jpg'
        ],
    ];

    public function run()
    {
        foreach (self::$titlesArray as $titles) {

            DB::table('main_sliders')->insert([
                'title_en' => $titles['title_en'],
                'title_ru' => $titles['title_ru'],
                'title_arm' => $titles['title_arm'],
                'img_path' => $titles['url']
            ]);
        }

    }
}
