<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static $services = [
        ['title_en' => 'Trafic lights',
            'title_ru' => 'Светофор',
            'title_arm' => 'Լուսաֆորներ',
            'icon' => '/img/light.png',
            'bg' => '/img/light.jpg'
        ],
        ['title_en' => 'Road Signs',
            'title_ru' => 'Дорожные разметки',
            'title_arm' => 'Ճանապարհային նշում',
            'icon' => '/img/sigh.png',
            'bg' => '/img/sign.jpg'
        ],
        ['title_en' => 'Road Marks',
            'title_ru' => 'Дорожные знаки',
            'title_arm' => 'Ճանապարհային նշաններ',
            'icon' => '/img/marks.png',
            'bg' => '/img/marks.jpg'
        ],
        ['title_en' => 'Equipment',
            'title_ru' => 'Оборудование',
            'title_arm' => 'Սարքավորումներ',
            'icon' => '/img/equipment.png',
            'bg' => '/img/equipment.jpg'
        ],
    ];

    public function run()
    {
        foreach (self::$services as $service) {
            DB::table('services')->insert([
                'title_en' => $service['title_en'],
                'title_ru' => $service['title_ru'],
                'title_arm' => $service['title_arm'],
                'icon' => $service['icon'],
                'bg' => $service['bg']
            ]);
        }

    }
}
