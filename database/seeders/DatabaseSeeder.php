<?php

namespace Database\Seeders;

use App\Models\Header;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HeaderSeeder::class,
            MainSliderSeeder::class,
            OurMissionSeeder::class,
            ServiceSeeder::class,
            ProjectSeeder::class,
            NewsPressSeeder::class,
            FooterSeeder::class,
            FormSeeder::class,
            IconSeeder::class]);
        // \App\Models\User::factory(10)->create();
    }
}
