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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('prenom', 50);
            $table->string('nom', 50);
            $table->string('email', 80)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 80);
            $table->string('numero_tel', 10)->nullable();
            $table->string('adresse', 50)->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreignId('role_id')->default(1)->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};