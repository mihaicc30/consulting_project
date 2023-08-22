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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->json('currency')->nullable();
            $table->string('icon')->nullable();
            $table->string('slug')->nullable();
            $table->string('stripe_plan')->nullable();
            $table->string('stripe_yearly_plan')->nullable();
            $table->string('description')->nullable();
            $table->string('message')->nullable();
            $table->json('options')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
