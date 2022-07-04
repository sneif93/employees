<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\City;

class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'fk_id_country' => 1,
            'created_at' => now()
        ];
    }

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        City::factory()
        ->count(30)
        ->create();
    }
}
