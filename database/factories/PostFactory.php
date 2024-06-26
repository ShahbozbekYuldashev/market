<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => rand(1, 5),
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(25),
            'short_content' => $this->faker->paragraph(),
            'photo' => $this->faker->imageUrl(640, 480, 'nature', true, 'Faker'),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
