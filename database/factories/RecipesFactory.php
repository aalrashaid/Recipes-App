<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\cuisines;
use App\Models\thumbnails;
use App\Models\categories;

class RecipesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id'  => User::all()->random()->id,

            'cuisines_id'  => cuisines::all()->random()->id,
            'thumbnail_id'  => thumbnails::all()->random()->id,
            'category_id'  => categories::all()->random()->id,

            'title'  => $this->faker->word(),
            'slug'  => $this->faker->slug(), //This fixed the (SlugService) calls for Models later
            'dsescription'  => $this->faker->text($maxNbChars = 200),
            'youtubevideo'  => $this->faker->url(),
            'method'  => $this->faker->word(),
            'difficlty'  => $this->faker->word(),
            'preptime'  => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'cooktime'  => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'total'  => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'servings'  => $this->faker->numberBetween($min = 1, $max = 10),
            'yield'  => $this->faker->numberBetween($min = 1, $max = 10),
            'ingredients'  => $this->faker->text($maxNbChars = 200),
            'directions'  => $this->faker->text($maxNbChars = 200),
            'nutritionFacts'  => $this->faker->text($maxNbChars = 200),
        ];
    }
}
