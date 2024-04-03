<?php

namespace Database\Factories;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    protected $model = Report::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'period_start' => $this->faker->date(),
            'period_end' => $this->faker->date(),
            'content' => json_encode(['data' => $this->faker->sentence]),
        ];
    }
}