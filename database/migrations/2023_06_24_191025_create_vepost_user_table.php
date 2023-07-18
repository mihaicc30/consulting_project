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
        Schema::create('vepost_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->nullable(); // I've added the nullable;
            $table->string('vepost_addr')->nullable(); // I've added the nullable
            $table->string('password');
            $table->string('displayname')->nullable();
            $table->string('controlstring', 20)->default('10000000000000000000');
            $table->string('vepost_counter')->default('10'); // 
            $table->string('status')->default('0');
            $table->string('free_send_left')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vepost_user');
    }
};
