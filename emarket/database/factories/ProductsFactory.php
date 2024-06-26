<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->word(),
            'description'=>$this->faker->paragraph(4,true),
            'prix'=>$this->faker->randomFloat(100,50000),
            'categorie'=>$this->faker->word(),
            'quantite'=>$this->faker->randomDigit(),
            'created_at'=>now()
        ];
    }
}
