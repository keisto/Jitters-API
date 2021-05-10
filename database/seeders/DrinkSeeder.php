<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drinks = [
            [
                "name" => "Monster Ultra Sunrise",
                "description" => "Ultra Sunrise will get you started but it`s great anytime: light, crisp, and refreshing with a flavor all its own. Packed with a full load of our Monster orange energy blend to keep the fire burning all day long. After all it's always sunrise somewhere.",
                "caffeine" => 75,
                "servings" => 2
            ],
            [
                "name" => "Black Coffee",
                "description" => "Black coffee is simply coffee that is normally brewed without the addition of additives such as sugar, milk, cream or added flavours.",
                "caffeine" => 95,
                "servings" => 1
            ],
            [
                "name" => "Americano",
                "description" => "Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee.",
                "caffeine" => 77,
                "servings" => 1
            ],
            [
                "name" => "Sugar free NOS",
                "description" => "Fuel Up. Fire Up. 100 mile an hour power. Thundering from top gear to no fear, the super-charged take charge. It's time to strap in, or sit it out. How Hard Will You Drive? High Performance Energy.",
                "caffeine" => 130,
                "servings" => 2
            ],
            [
                "name" => "5 Hour Energy",
                "description" => "Boasting an effective blend of B-vitamins, nutrients and caffeine, Berry 5-hour ENERGY® started it all in 2004. Want a great pick-me-up? Go retro and order this classic today.",
                "caffeine" => 200,
                "servings" => 1
            ]
        ];

        collect($drinks)->each(function ($drink) {
            Drink::create([
                'name' => $drink['name'],
                'description' => $drink['description'],
                'caffeine' => $drink['caffeine'],
                'servings' => $drink['servings'],
            ]);
        });
    }
}
