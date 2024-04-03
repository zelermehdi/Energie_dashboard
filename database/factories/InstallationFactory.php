<?php

namespace Database\Factories;

use App\Models\Installation;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstallationFactory extends Factory
{
    protected $model = Installation::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'name' => $this->faker->word,
            'type' => $this->faker->randomElement(['solaire', 'éolienne']),
            'location' => $this->faker->address,
            'capacity' => $this->faker->randomFloat(2, 100, 1000), // entre 100 et 1000 avec 2 décimales
            'installation_date' => $this->faker->date(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
