<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static $texts = [
        ['text_en' => "About",
            'text_ru' => "О нас",
            'text_arm' => "Մեր մասին"],
        ['text_en' => "FAQ",
            'text_ru' => 'ФАК',
            'text_arm' => 'ՀՏՀ',],
        ['text_en' => "Contact Us",
            'text_ru' => 'Связаться с нами',
            'text_arm' => 'Միացեք մեզ հետ',],
        ['text_en' => "Careers",
            'text_ru' => 'Карьера',
            'text_arm' => 'Կարիերա',],
        ['text_en' => 'Terms & conditions',
            'text_ru' => 'Условия',
            'text_arm' => 'Պայմանները
        ',],
        ['text_en' => 'Adventury types',
            'text_ru' => 'Типы приключений',
            'text_arm' => 'Արկածային տեսակները',],
        ['text_en' => 'Destinations',
            'text_ru' => 'Направления',
            'text_arm' => 'Ուղղություններ',],
        ['text_en' => 'Seasons',
            'text_ru' => 'Сезоны',
            'text_arm' => 'Սեզոններ',],
        ['text_en' => 'Artist Fellowships',
            'text_ru' => 'Стипендии художников',
            'text_arm' => 'Նկարիչների կրթաթոշակներ',],
        ['text_en' => 'Adventury types',
            'text_ru' => 'Типы приключений',
            'text_arm' => 'Արկածային տեսակներ',],
        ['text_en' => 'Adventury types',
            'text_ru' => 'Типы приключений',
            'text_arm' => 'Արկածային տեսակները',],
        ['text_en' => 'Destinations',
            'text_ru' => 'Направления',
            'text_arm' => 'Ուղղություններ',],
        ['text_en' => 'Seasons',
            'text_ru' => 'Сезоны',
            'text_arm' => 'Սեզոններ',],
        ['text_en' => 'Artist Fellowships',
            'text_ru' => 'Стипендии художников',
            'text_arm' => 'Նկարիչների կրթաթոշակներ',],
    ];

    public function run()
    {
        foreach (self::$texts as $text) {
            DB::table('footers')->insert([
                'text_en' => $text['text_en'],
                'text_ru' => $text['text_ru'],
                'text_arm' => $text['text_arm'],
                'url' => '#'
            ]);
        }
    }
}
