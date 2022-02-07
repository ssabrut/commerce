<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'merchant_id' => random_int(1, 5),
            'name' => $this->faker->domainName(),
            'slug' => $this->faker->slug(),
            'price' => random_int(1, 99999),
            'description' => $this->faker->realText(),
        ];
    }
}
