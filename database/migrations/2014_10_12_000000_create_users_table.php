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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('controlstring', 20)->default('10000000000000000000');  // more clarification of the string in the 2023_06_24_191025_create_vepost_user_table.php
            $table->json('contacts')->nullable()->default(null);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    //  controll string
    // - account state - active 1 / locked 0
    // - user group - personal 0 / business 1
    // - user plan - topup 0 / starter 1 / basic 2 / premium 3
    // - number of users?  0 is 1-9 users / 1 is 10-19 users / 2 is 20-29 users / ... / 9 is 90-100 users / 
    // - allowed package size - 0 50mb / 1 100mb/ 2 150mb / 3 200mb /..... / 9 subscription (apparently unlimited)

    // now to assign the rest of them? for example

    // - desktop user - 0 allowed / 1 denied
    // - web user - 0 allowed / 1 denied
    // - token number ?   - reserve two digits - max 99
    // - token number ?   - reserve two digits - max 99
    // - 
    // -
    // -
    // -
    // -
    // -
    // -
    // -
    // -
    // -
    // - last number -  admin ? - 0 no - 1 yes
    // 
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
