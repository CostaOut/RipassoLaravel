<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boyfriend>
 */
class BoyfriendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usersIDs = User::all()->modelKeys();
        

        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'birthday' => fake()->dateTimeBetween('-30 years', '-19years'),
            'available' => fake()->boolean(),
            'height' => fake()->numberBetween(170, 200),
            'user_id' => fake()->randomElement($usersIDs),
        ];
    }
}
