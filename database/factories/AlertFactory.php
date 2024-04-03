<?php

namespace Database\Factories;

use App\Models\Alert;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlertFactory extends Factory
{
    protected $model = Alert::class;

    public function definition()
    {
        return [
            'installation_id' => \App\Models\Installation::factory(),
            'type' => $this->faker->randomElement(['maintenance', 'performance']),
            'description' => $this->faker->sentence,
            'status' => $this->faker->randomElement(['open', 'closed']),
        ];
    }
}
