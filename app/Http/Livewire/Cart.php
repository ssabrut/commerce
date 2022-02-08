<?php

namespace App\Http\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Cart extends Component {

    public $cart, $userProducts, $quantity, $subtotal, $shipping, $tax, $total;

    protected $listeners = [
        'setQuantity' => 'setQuantity'
    ];

    public function mount() {
        $this->cart = ModelsCart::firstWhere('user_id', auth()->user()->id);
    }

    public function remove($slug) {
        $product = Product::firstWhere('slug', $slug);
        DB::table('cart_products')->where('product_id', $product->id)->delete();
    }

    public function decrement($slug, $quantity) {
        $quantity--;
        $product = Product::firstWhere('slug', $slug);
        DB::table('cart_products')
            ->where('cart_id', $this->cart->id)
            ->where('product_id', $product->id)
            ->update([
                'quantity' => $quantity,
                'updated_at' => Carbon::now()
            ]);
    }

    public function increment($slug, $quantity) {
        $quantity++;
        $product = Product::firstWhere('slug', $slug);
        DB::table('cart_products')
            ->where('cart_id', $this->cart->id)
            ->where('product_id', $product->id)
            ->update([
                'quantity' => $quantity,
                'updated_at' => Carbon::now()
            ]);
    }

    public function setQuantity($slug, $quantity) {
        $this->quantity = $quantity;
        $product = Product::firstWhere('slug', $slug);
        DB::table('cart_products')
            ->where('cart_id', $this->cart->id)
            ->where('product_id', $product->id)
            ->update([
                'quantity' => $this->quantity,
                'updated_at' => Carbon::now()
            ]);
    }

    public function render() {
        $this->subtotal = 0;
        $this->shipping = 0;
        $this->tax = 0;
        $this->total = 0;
        $this->userProducts = DB::table('cart_products')
            ->join('products', 'cart_products.product_id', '=', 'products.id')
            ->join('merchants', 'products.merchant_id', '=', 'merchants.id')
            ->select('products.name as product_name', 'products.price', 'cart_products.quantity', 'merchants.name as merchant_name', 'products.slug')
            ->where('cart_id', $this->cart->id)
            ->orderByDesc('cart_products.id')
            ->get();

        for ($i = 0; $i < count($this->userProducts); $i++) {
            $total = $this->userProducts[$i]->price * $this->userProducts[$i]->quantity;
            $this->subtotal += $total;
        }

        $this->shipping = $this->subtotal * 0.001;
        $this->tax = $this->subtotal * 0.1;
        $this->total = $this->subtotal + $this->shipping + $this->tax;

        return view('livewire.cart');
    }
}
