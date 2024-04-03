<?php

namespace Database\Factories;

use App\Models\EnergyProduction;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnergyProductionFactory extends Factory
{
    protected $model = EnergyProduction::class;

    public function definition()
    {
        return [
            'installation_id' => \App\Models\Installation::factory(),
            'date' => $this->faker->date(),
            'energy_generated' => $this->faker->numberBetween(100, 1000), // en kWh
        ];
    }
}
