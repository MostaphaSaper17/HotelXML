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
            $table->string('booking_reference_id')->after('total_price');
            $table->string('refund_date')->nullable()->after('booking_reference_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('manual_bookings', function (Blueprint $table) {
            $table->dropIfExists('booking_reference_id');
            $table->dropIfExists('refund_date');
        });
    }
};
