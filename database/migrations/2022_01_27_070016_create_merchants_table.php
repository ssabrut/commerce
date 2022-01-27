<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner_id')
                ->references('id')
                ->on('users')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('name');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('merchants');
    }
}
