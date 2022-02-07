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
            'slug' => $this->faker->slug(),
            'location' => $this->faker->address(),
            'image_path' => 'https://play-lh.googleusercontent.com/fHr2pe1B7n_dvrFX3e-P-BFrsiMJ-nPh4_wn4Yj2vwlINS_Lb4CwK8qKGK8upu5to-RK'
        ];
    }
}
