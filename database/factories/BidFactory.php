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
            'client_status' =>rand(0,1)?'approaved':'rejected',
            'artisan_status' =>rand(0,1)?'pending':'completed',
            'user_id' => $this->faker->randomDigit()+ 1,
            'request_id' => $this->faker->randomDigit()+ 1,
        ];
    }
}
