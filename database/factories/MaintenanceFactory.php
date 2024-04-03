<?php
namespace Database\Factories;

use App\Models\Maintenance;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintenanceFactory extends Factory
{
    protected $model = Maintenance::class;

    public function definition()
    {
        return [
            'installation_id' => \App\Models\Installation::factory(),
            'scheduled_date' => $this->faker->date(),
            'completion_date' => $this->faker->optional()->date(),
            'status' => $this->faker->randomElement(['planned', 'completed']),
            'notes' => $this->faker->optional()->sentence,
        ];
    }
}
