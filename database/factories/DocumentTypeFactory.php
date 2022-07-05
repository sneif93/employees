<?php

namespace Database\Factories;

use App\Models\DocumentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => "cc",
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
        DocumentType::factory()->create();
    }
}
