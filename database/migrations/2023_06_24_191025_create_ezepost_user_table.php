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
        Schema::create('ezepost_user', function (Blueprint $table) {
            $table->bigIncrements('id', 20);
            $table->string('username')->unique()->nullable();
            $table->uuid('ezepost_addr')->unique();
            $table->string('password');
            $table->string('displayname')->nullable();
            $table->string('controlstring', 20)->default('10000000000000000000');
            $table->string('balance')->default('0');
            $table->string('ezepost_counter')->default('10'); // 
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
        Schema::dropIfExists('ezepost_user');
    }
};
