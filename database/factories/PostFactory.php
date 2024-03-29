<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence(7, 10),
            'short_description' => $this->faker->paragraphs(rand(0, 1), true),
            'description' => $this->faker->paragraphs(rand(10, 15), true),
            'category_id' => $this->faker->numberBetween(1, 10),
            'featured' => $this->faker->numberBetween(0, 1),
            'featured_image' => $this->faker->imageUrl('800','500')
        ];
    }
}
