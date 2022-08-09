<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProfilesFactory extends Factory
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
            'country_id' =>  $this->faker->numberBetween($min = 1, $max = 4) ,
            'language_id'  => $this->faker->numberBetween($min = 1, $max = 5) ,
            'genders_id'  => $this->faker->numberBetween($min = 1, $max = 2),
            'fullName'  => $this->faker->name(),
            'slug'  => $this->faker->slug(), //This fixed the (SlugService) calls for Models later
            'bio'  => $this->faker->text($maxNbChars = 200),
            'quotes'  => $this->faker->text($maxNbChars = 180),
            'birthday'  => $this->faker->date($format = 'Y-m-d', $max = 'now'),

            'avatar'  => $this->faker->imageUrl($width = 640, $height = 480),
            'facebook'  => $this->faker->url(),
            'linkedIn'  => $this->faker->url(),
            'instagram'  => $this->faker->url(),
            'youtube'  => $this->faker->url(),
            'website'  => $this->faker->url(),
        ];
    }
}
