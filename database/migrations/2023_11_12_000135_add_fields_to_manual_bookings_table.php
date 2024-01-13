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
        Schema::table('manual_bookings', function (Blueprint $table) {
            $table->string('room_types')->after('children_number');
            $table->string('children_ages')->after('room_types');
            $table->string('guest_names')->after('children_ages');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('manual_bookings', function (Blueprint $table) {
            $table->dropIfExists('room_types');
            $table->dropIfExists('children_ages');
            $table->dropIfExists('guest_names');
        });
    }
};
