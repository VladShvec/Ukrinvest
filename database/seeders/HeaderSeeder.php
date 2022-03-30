<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
//    public static $texts_en = [
//        "Home",
//        "Mission",
//        "Servises",
//        "Projects",
//        "Contacts",
//        "News",
//        "About"
//
//    ];
    public static $texts = [
        ['text_en' => "Home",
            'text_ru' => "Домой",
            'text_arm' => "Տուն",
            'page_id' => 'Home'],

        ['text_en' => "Mission",
            'text_ru' => "Миссии",
            'text_arm' => "Առաքելություն",
            'page_id' => 'Mission'],

        ['text_en' => "Servises",
            'text_ru' => "Службы",
            'text_arm' => "Ծառայություններ",
            'page_id' => 'Servises',
        ],

        ['text_en' => "Projects",
            'text_ru' => "Проекты",
            'text_arm' => "Նախագծեր",
            'page_id' => 'Projects'
        ],

        ['text_en' => "Contacts",
            'text_ru' => "Контакты",
            'text_arm' => "Կոնտակտներ",
            'page_id' => 'Contacts'
        ],

        ['text_en' => "News",
            'text_ru' => "Новости",
            'text_arm' => "Նորություն.",
            'page_id' => 'News'
        ],
        [
            'text_en' => "About",
            'text_ru' => "О нас",
            'text_arm' => "Մեր մասին",
            'page_id' => 'About'
        ]

    ];
//    public static $texts_arm = [
//        ['text_arm' => "Տուն",
//            'page_id' => 'Home'],
//        ['text_arm' => "Առաքել.",
//            'page_id' => 'Mission'],
//        ['text_arm' => "Ծառաներ",
//            'page_id' => 'Servises',
//        ],
//        ['text_arm' => "Նախագծեր",
//            'page_id' => 'Projects'
//        ],
//        ['text_arm' => "Կոնտակտներ",
//            'page_id' => 'Contacts'
//        ],
//        ['text_arm' => "Նորություն.",
//            'page_id' => 'News'
//        ],
//        ['text_arm' => "Մեր մասին",
//            'page_id' => 'About'
//        ]
//
//    ];


    public function run()
    {
        foreach (self::$texts as $text) {
            DB::table('headers')->insert([
                'text_en' => $text['text_en'],
                'text_ru' => $text['text_ru'],
                'text_arm' => $text['text_arm'],
                'page_id' => $text['page_id'],
                'url' => '#'
            ]);
        }


    }
}
