<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'category' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomNumber(5),
            'stock' => $this->faker->randomNumber(3)
        ];
    }
}
