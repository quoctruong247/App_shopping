<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'title'=>fake()->name(),
            'image'=>fake()->imageUrl($width = 200, $height = 200),
            //fake->title()
            // 'user_id' => $faker->unique()->numberBetween($min = 1, $max = 50),
            // 'name'  => $faker->firstNameMale,
            // 'value_added_tax'   => $faker->randomDigit,
            // 'city' => $faker->city,
            // 'post_code' => $faker->postcode,
            // 'country' => $faker->country,
            // 'phone' => $faker->phoneNumber,
            // 'img_src' => $faker->imageUrl($width = 200, $height = 200)
        ];
    }
}
