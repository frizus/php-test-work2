<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Region>
 */
class RegionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // TODO проверить, чтобы unique() действует только внутри этого фактори
        return [
            'name' => fake()->unique()->randomElement(['Арбат', 'Басманный', 'Хамовники', 'Красносельский', 'Мещанский', 'Пресненский', 'Таганский', 'Тверской', 'Якиманка', 'Замоскворечье'])
        ];
    }
}
