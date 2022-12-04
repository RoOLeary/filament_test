<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'slug' => $this->faker->text(),
            'title' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(640,480),
            'body' => $this->faker->text(),
            'excerpt' => $this->faker->text(),
        ];
    }
}
