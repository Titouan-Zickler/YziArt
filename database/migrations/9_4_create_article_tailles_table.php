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
        Schema::create('article_tailles', function (Blueprint $table) {
            $table->timestamps();

            $table->primary(['article_id','taille_id']);

            $table->foreignId('article_id')->constrained()->onDelete('cascade');
            $table->foreignId('taille_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tailles');
    }
};
