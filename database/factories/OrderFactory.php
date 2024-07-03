<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $status = fake()->randomElement(['created', 'completed']),
            'weight' => fake()->randomFloat(2, 0.5, 20),
            'delivery_hours_start' => $start = Carbon::createFromTime(rand(0, 23), rand(0, 3) === 0 ? 30 : 0)->toTimeString(),
            'delivery_hours_end' => Carbon::createFromTimeString($start)->addHours(rand(1, 2))->addMinutes(rand(0, 3) === 0 ? 30 : 0)->toTimeString(),
            'complete_time' => $status === 'completed' ? fake()->dateTimeBetween('-1 week') : null,
        ];
    }
}
