<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function merchant() {
        return $this->belongsTo(Merchant::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'product_categories');
    }

    public function carts() {
        return $this->belongsToMany(Cart::class, 'cart_products');
    }

    public function transactionDetail() {
        return $this->belongsTo(TransactionDetail::class);
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }
}
