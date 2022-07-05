<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->firstName() ,
            "last_name"=>$this->faker->lastName(),
            "document_number"=>$this->faker->randomNumber(6),
            "address"=>$this->faker->address(),
            "phone_number"=>$this->faker->phoneNumber(),
            "city_id_city"=>$this->faker->randomElement([1,2,3,4,5,6,7,8,9]),
            "document_type_id_document_type"=>$this->faker->randomElement([1,2,3,4,5])
        ];
    }

    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Employee::factory()->create();
    }
}
