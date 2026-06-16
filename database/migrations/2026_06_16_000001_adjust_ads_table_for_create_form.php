<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Aligne la table `ads` avec le formulaire de création :
     *  - image / adresse / coordonnées GPS deviennent facultatives (nullable) ;
     *  - les colonnes GPS gagnent en précision (decimal 10,7) ;
     *  - author_id n'est plus unique : un utilisateur peut publier plusieurs annonces.
     */
    public function up(): void
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->string('image', 191)->nullable()->change();
            $table->string('adress_indication', 191)->nullable()->change();
            $table->decimal('adress_latitude', 10, 7)->nullable()->change();
            $table->decimal('adress_longitude', 10, 7)->nullable()->change();

            $table->dropUnique('ads_author_id_unique');
            $table->index('author_id', 'ads_author_id_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->dropIndex('ads_author_id_index');
            $table->unique('author_id', 'ads_author_id_unique');

            $table->string('image', 191)->nullable(false)->change();
            $table->string('adress_indication', 191)->nullable(false)->change();
            $table->decimal('adress_latitude', 8, 2)->nullable(false)->change();
            $table->decimal('adress_longitude', 8, 2)->nullable(false)->change();
        });
    }
};
