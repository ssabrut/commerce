<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddToCart extends Component {

    public $slug, $quantity;

    public function mount($slug) {
        $this->slug = $slug;
        $this->quantity = 1;
    }

    public function addToCart() {
        $cart = Cart::where('user_id', auth()->user()->id)->first();
        $product = Product::firstWhere('slug', $this->slug);

        DB::table('cart_products')->insert([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'quantity' => 1,
            'created_at' => Carbon::now()
        ]);
    }

    public function decrement() {
        $this->quantity--;
    }

    public function increment() {
        $this->quantity++;
    }

    public function render() {
        return view('livewire.add-to-cart');
    }
}
