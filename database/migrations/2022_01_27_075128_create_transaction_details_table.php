<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id')
                ->references('id')
                ->on('transactions')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('product_id')
                ->references('id')
                ->on('products')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->integer('quantity');
            $table->integer('price');
            $table->integer('shipping');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('transaction_details');
    }
}
