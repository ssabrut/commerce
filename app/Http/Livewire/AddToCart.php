<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AddToCart extends Component {

    public $slug, $quantity, $product;

    protected $listeners = [
        'setQuantity' => 'setQuantity'
    ];

    public function mount($slug) {
        $this->slug = $slug;
        $this->quantity = 1;
        $this->product = Product::firstWhere('slug', $this->slug);
    }

    public function decrement() {
        $this->quantity--;
    }

    public function increment() {
        $this->quantity++;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function addToCart() {
        $cart = Cart::where('user_id', auth()->user()->id)->first();

        DB::table('cart_products')->insert([
            'cart_id' => $cart->id,
            'product_id' => $this->product->id,
            'quantity' => $this->quantity,
            'created_at' => Carbon::now()
        ]);
    }

    public function wishlist() {
        DB::table('wishlists')->insert([
            'user_id' => auth()->user()->id,
            'product_id' => $this->product->id
        ]);
    }

    public function render() {
        return view('livewire.add-to-cart');
    }
}
