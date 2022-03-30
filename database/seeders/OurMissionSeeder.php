<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OurMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('our_missions')->insert([
            'title_en' => 'Our Mission',
            'title_ru' => 'Наша Миссия',
            'title_arm' => 'Մեր առաքելությունը',
            'text_en' => 'Lorem ipsum  dolor  sit amet, consectetur  adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaaqua. Ut enim  ad  minim veniam, quis  nostrud  exercitation  ullamco laboris nisi  ut aliquip ex ea  commodo consequatb. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumdolore eu fugiat nulla pariatur.',
            'text_ru' => 'Боль сама по себе любовь к боли, главная экологическая элита, но я даю ей время впасть в такую ​​большую боль и боль. Для того, чтобы прийти, кто из нас должен заниматься какой-либо школой труда, кроме как для достижения целей от нее. Но боль в фильме — это irure для критики в удовольствии, которое он хочет убежать от cillusdolore, за которую никто не захочет платить.',
            'text_arm' => 'Ցավն ինքնին ցավի սերն է, գլխավոր էկոլոգիական էլիտան, բայց ես նրան ժամանակ եմ տալիս այս տեսակ մեծ ցավի ու ցավի մեջ ընկնելու համար։ Գալու նպատակով, մեզնից ով պետք է վարի աշխատանքի որևէ դպրոց, բացի նրանից նպատակներ ստանալուց: Բայց ֆիլմի ցավը դժվար չէ քննադատել այն հաճույքով, որով նա ցանկանում է փախչել ցրտահարությունից, որի համար ոչ ոք չէր ցանկանա վճարել:',
            'link_text_en' => 'read more',
            'link_text_ru' => 'Прочесть еще',
            'link_text_arm' => 'Կարդալ ավելին',
            'url' => '#'
        ]);
    }
}
