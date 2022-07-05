<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JobPosition;

class JobPositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=> $this->faker->jobTitle(),
            "parent_id_job_position" => 1,
            "created_at"=>now()
        ];
    }

     /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        JobPosition::factory()->create();
    }
}
