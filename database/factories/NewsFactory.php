<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()

    {
        // posto nisi definisila da je user nullable onda moramo da svaki put 
        // izvucemo random user-a
        $user = User::inRandomOrder()->first();

        return [
            'title' => Str::random(6),
            'content' => $this->faker->realText(),
            'user_id' => $user->id
        ];
    }
}