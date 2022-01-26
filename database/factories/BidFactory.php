<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message' => $this->faker->sentence(),
            'client_status' =>$this->faker->boolean(),
            'artisan_status' => $this->faker->boolean(),
            'user_id' => $this->faker->randomDigit(),
            'request_id' => $this->faker->randomDigit(),
        ];
    }
}
