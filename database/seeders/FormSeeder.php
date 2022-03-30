<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static $titles = [
        '+374 10 128471',
        'info@ikrinvest.com',
        '111 Address',
        'Yerevan 0000,',
        'Armenia'
    ];

    public function run()
    {
        foreach (self::$titles as $title) {
            DB::table('forms')->insert([
                'forms_title' => $title

            ]);
        }

    }
}
