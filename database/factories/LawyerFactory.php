<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lawyer>
 */
class LawyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Lawyer::class; 

    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'province' => $this->faker->province(),
            'postal' => $this->faker->postal(),
            'phone' => $this->faker->phone(),
            'title' => $this->faker->title(),   
            'gender' => 'Female',  
            'country' => '',  
            'languages' => '',  
            'law_firm_name' => 'Human Rights',  
            'law_firm_reg_no' => '47393034950',  
            'story' => ''
        ];
    }
}
