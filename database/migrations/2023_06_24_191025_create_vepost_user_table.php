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
            $table->string('username');
            $table->string('vepost_addr');
            $table->string('password');
            $table->string('displayname')->nullable();
            $table->string('controlstring', 20)->default('10010000000000000000');
            $table->decimal('balance', 10, 2)->default(0.00);
            $table->string('vepost_counter')->default('10');
            $table->string('status')->default('0');
            $table->string('free_send_left')->nullable();
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
// -
// 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vepost_user');
    }
};
