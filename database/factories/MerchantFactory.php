<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MerchantFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'owner_id' => random_int(1, 10),
            'name' => $this->faker->company(),
            'location' => $this->faker->address(),
        ];
    }
}
