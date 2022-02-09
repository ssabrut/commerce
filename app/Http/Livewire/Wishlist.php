<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Wishlist extends Component {

    public $wishlists;

    public function render() {
        $this->wishlists = DB::table('wishlists')
            ->join('products', 'wishlists.product_id', '=', 'products.id')
            ->join('product_categories', 'product_categories.product_id', '=', 'products.id')
            ->join('categories', 'product_categories.category_id', '=', 'categories.id')
            ->select('products.name as product_name', 'products.slug', 'categories.name as category_name')
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('livewire.wishlist');
    }
}
