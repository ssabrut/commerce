<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteProductIdAndQuantityColumnFromCartsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign('carts_product_id_foreign');
            $table->dropColumn('product_id');
            $table->dropColumn('quantity');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('carts', function (Blueprint $table) {
            //
        });
    }
}
