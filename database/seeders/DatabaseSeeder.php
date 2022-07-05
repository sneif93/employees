<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Country::factory()->create(["name"=>"Colombia","created_at" => now()]);
        \App\Models\City::factory(30)->create();    
        \App\Models\City::factory(30)->create();    
        \App\Models\JobPosition::factory()->create(["name"=>"President","parent_id_job_position" => Null,"created_at" => now()]);
        \App\Models\JobPosition::factory(30)->create();
        \App\Models\DocumentType::factory()->create(
            ["name"=>"Tarjeta de identidad", "created_at" => now() ]
        );
        \App\Models\DocumentType::factory()->create(
            ["name"=>"Cédula de ciudadanía", "created_at" => now() ]
        );
        \App\Models\DocumentType::factory()->create(
            ["name"=>"Tarjeta de extranjería", "created_at" => now() ]
        );
        \App\Models\DocumentType::factory()->create(
            ["name"=>"Cédula de extranjería", "created_at" => now() ]
        );
        \App\Models\DocumentType::factory()->create(
            ["name"=>"Pasaporte", "created_at" => now() ]
        );
        \App\Models\Employee::factory(100)->create();
        
    }
}
