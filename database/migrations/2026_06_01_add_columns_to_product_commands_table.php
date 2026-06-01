<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('product_commands', function (Blueprint $table) {
            $table->decimal('quantity', 8, 2)->default(1);
            $table->integer('unit_price')->nullable();
            $table->integer('total_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_commands', function (Blueprint $table) {
            $table->dropColumn(['quantity', 'unit_price', 'total_price']);
        });
    }
};
