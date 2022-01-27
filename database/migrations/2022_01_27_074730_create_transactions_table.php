<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')
                ->references('id')
                ->on('users')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->integer('total_price');
            $table->integer('total_shipping');
            $table->enum('status', ['PAID', 'UNPAID', 'SHIPMENT']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('transactions');
    }
}
