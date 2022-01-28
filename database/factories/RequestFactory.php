<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'image_url' => $this->faker->word(),
            'location' =>$this->faker->address(),
            'price' =>$this->faker->randomNumber(3),
            'user_id' => $this->faker->randomDigit()+ 1,
        ];
    }
}
