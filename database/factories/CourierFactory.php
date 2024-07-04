<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Courier>
 */
class CourierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'courier_type' => fake()->randomElement(['foot', 'bike', 'car']),
            'working_hours_start' => $start = Carbon::createFromTime(rand(6, 14), rand(0, 3) === 0 ? 30 : 0)->toTimeString('minute'),
            'working_hours_end' => Carbon::createFromTimeString($start)->addHours(rand(4, 8))->addMinutes(rand(0, 3) === 0 ? 30 : 0)->toTimeString('minute'),
        ];
    }
}
