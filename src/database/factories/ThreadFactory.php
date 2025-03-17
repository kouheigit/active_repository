<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thread>
 */
class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence,
            'name'=>$this->faker->name,
            'comment'=>$this->faker->paragraph,
            'generateid'=>'1240e2e200',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
