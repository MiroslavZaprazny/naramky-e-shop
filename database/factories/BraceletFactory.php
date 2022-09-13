<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bracelet>
 */
class BraceletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_name' => 'prirodne',
            'title' => 'Naramok 1',
            'description' => $this->faker->paragraph(),
            'thumbnail' => '/images/demo2.png',
            'price' => 15
        ];
    }
}
