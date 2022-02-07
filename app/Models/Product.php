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

    public function cart() {
        return $this->belongsTo(Cart::class);
    }

    public function transactionDetail() {
        return $this->belongsTo(TransactionDetail::class);
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }
}
