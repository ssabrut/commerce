<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller {

    public function index() {
        return view('main', [
            'recentlyAddeds' => $this->recentlyAdded()
        ]);
    }

    public function recentlyAdded() {
        $recentlyAdded = Product::with(['merchant', 'categories'])
            ->orderBy('created_at', 'DESC')
            ->take(50)
            ->get();

        return $recentlyAdded;
    }
}
