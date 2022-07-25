<?php

namespace Database\Seeders;

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
        //\App\Models\User::factory(10)->create();

        $this->call([

            CuisinesSeeder::class,
            CategoriesSeeder::class,
            CountriesSeeder::class,
            GendersSeeder::class,
            LanguagesSeeder::class
        ]);

        $this->command->info('Cuisine Seeder table seeded !,  created successfully.');
        $this->command->info('Category Seeder table seeded!,  created successfully.');
        $this->command->info('Country Seeder table seeded!,  created successfully.');
        $this->command->info('Gender Seeder table seeded !,  created successfully.');
        $this->command->info('Language Seeder table seeded!,  created successfully.');
    }
}
