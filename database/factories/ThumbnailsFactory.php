<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class ThumbnailsFactory extends Factory
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

            'thumbnail'  => $this->faker->word(),
            'size'  => $this->faker->randomNumber(4),
            'path'  => $this->faker->imageUrl($width = 640,  $height = 480, 'food'),
        ];
    }
}
