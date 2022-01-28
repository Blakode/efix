<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit()+ 1,
            'request_id' => $this->faker->randomDigit() + 1,
            'bid_id' => $this->faker->randomDigit() + 1,
        ];
    }
}
