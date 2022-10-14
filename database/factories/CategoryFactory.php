<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Apartments','Rooms For Rent','Houses For Rent','Raw Land','Single-Family Homes','Duplexes','Town Houses','Multifamily Residences','Stores','Hotels','Hospitals','Offices','Restaurant','Shopping Centers','Groceries','Agricultural Land','Ranches','Place of Worship']),
            //'slug' => $this->faker->randomElement(['Apartments','Rooms For Rent','Houses For Rent','Raw Land','Single-Family Homes','Duplexes','Town Houses','Multifamily Residences','Stores','Hotels','Hospitals','Offices','Restaurant','Shopping Centers','Groceries','Agricultural Land','Ranches','Place of Worship']),
        ];
    }
}
