<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->colorName,
            'description' => $this->faker->paragraph(2),
            'category' => $this->faker->word(),
            'price' => $this->faker->randomFLoat(2, 0, 120),
            'stock' => $this->faker->numberBetween(1,20),
            'image' => $this->faker->imageUrl($width, $height, 'cats', true, 'Faker')
        ];
    }
}
