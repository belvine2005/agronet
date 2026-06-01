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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('header');
            $table->string('description');
            $table->string('image');
            $table->decimal('adress_latitude');
            $table->decimal('adress_longitude');
            $table->string('adress_indication');

            $table->foreignId('author_id')
                  ->nullable()
                  ->unique()
                  ->constrained('users')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
