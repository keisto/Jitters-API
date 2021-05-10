<?php

namespace Database\Factories;

use App\Models\Drink;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Drink::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->colorName . ' Energy',
            'description' => $this->faker->paragraph(),
            'caffeine' => $this->faker->randomNumber(2),
            'servings' => $this->faker->randomElement([1, 2, 3]),
        ];
    }
}
