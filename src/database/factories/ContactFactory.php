<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                   'fullname' => $this->faker->name,
                   'gender' => $this->faker->boolean,
                   'email' => $this->faker->safeEmail(),
                   'postcode' => $this->faker->postcode(),
                   'address' => $this->faker->streetAddress,
                   'building_name' => $this->faker->secondaryAddress(),
                   'opinion' => $this->faker->realText
        ];
    }
}
