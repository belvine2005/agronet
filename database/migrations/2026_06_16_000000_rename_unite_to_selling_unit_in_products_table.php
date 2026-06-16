<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Aligne la table `products` avec le modèle : la colonne historique `unite`
     * devient `selling_unit` (attendue par le modèle, la validation et le formulaire).
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'unite') && ! Schema::hasColumn('products', 'selling_unit')) {
                $table->renameColumn('unite', 'selling_unit');
            } elseif (! Schema::hasColumn('products', 'selling_unit')) {
                $table->string('selling_unit')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            if (Schema::hasColumn('products', 'selling_unit') && ! Schema::hasColumn('products', 'unite')) {
                $table->renameColumn('selling_unit', 'unite');
            }
        });
    }
};
