<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model {
    use HasFactory;

    public function transaction() {
        return $this->belongsTo(Transaction::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
