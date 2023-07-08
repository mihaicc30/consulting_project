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
        Schema::create('vepost_block_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vepost_tracking_uid');

            // Add foreign key constraint
            $table->foreign('vepost_tracking_uid')
                ->references('UID')
                ->on('vepost_tracking')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('vepost_block_list', function (Blueprint $table) {
            $table->dropForeign(['vepost_tracking_uid']);
            $table->dropColumn('vepost_tracking_uid');
        });

        Schema::dropIfExists('vepost_block_list');
    }
};
