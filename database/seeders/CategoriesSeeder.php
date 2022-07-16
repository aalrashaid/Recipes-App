<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\categories;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // static data categories
        DB::table('categories')->insert([
            // ,'slug' => SlugService::createSlug(categories::class,'slug', '')

            ['name' => 'Apperizer', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Apperizer'), 'description' => 'An hors d\'oeuvre, appetizer or starter is a small dish served before a meal in European cuisine. Some hors d\'oeuvres are served cold, others hot. Hors d\'oeuvres may be served at the dinner table as a part of the meal, or they may be served before seating, such as at a reception or cocktail party.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Desserts', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Desserts'), 'description' => 'Dessert is a course that concludes a meal. The course consists of sweet foods, such as confections, and possibly a beverage such as dessert wine and liqueur. In some parts of the world, such as much of Central Africa and West Africa, and most parts of China, there is no tradition of a dessert course to conclude a meal.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Drinks', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Drinks'), 'description' => 'A drink (or beverage) is a liquid intended for human consumption. In addition to their basic function of satisfying thirst, drinks play important roles in human culture. Common types of drinks include plain drinking water, milk, juice, smoothies and soft drinks. Traditionally warm beverages include coffee, tea, and hot chocolate. Caffeinated drinks that contain the stimulant caffeine have a long history.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Main', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Main'), 'description' => 'Most of the human population lives on a diet based on one or more of the following staples: cereals (rice, wheat, maize (corn), millet, and sorghum), roots and tubers (potatoes, cassava, yams and taro), and animal products such as meat, milk, eggs, cheese and fish.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Noodls', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Noodls'), 'description' => 'Noodles are a type of food made from unleavened dough which is rolled flat and cut, stretched or extruded, into long strips or strings.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Reice', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Reice'), 'description' => '', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Salad', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Salad'), 'description' => '', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Sea Foods', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Sea Foods'), 'description' => '', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Soup', 'slug' => SlugService::createSlug(categories::class, 'slug', 'Soup'), 'description' => '', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
