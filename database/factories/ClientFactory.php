<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'province' => $this->faker->province(),
            'postal' => $this->faker->postal(),
            'phone' => $this->faker->phone(),
            'business' => $this->faker->job-title(),
            'title' => $this->faker->title(),        
        ];
    }
}
