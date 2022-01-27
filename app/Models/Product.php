<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function merchant() {
        return $this->belongsTo(Merchant::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function transactionDetails() {
        return $this->hasMany(TransactionDetail::class);
    }
}
