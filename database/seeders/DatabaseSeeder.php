<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Merchant;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        User::factory(10)->create();
        Merchant::factory(5)->create();
        Category::factory(10)->create();
        Product::factory(200)->create();

        foreach (range(1, 200) as $product) {
            DB::table('product_categories')->insert([
                'product_id' => $product,
                'category_id' => random_int(1, 10)
            ]);
        }
    }
}
