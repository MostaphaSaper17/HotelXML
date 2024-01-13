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
            $table->string('supplier_reference')->after('supplier_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('manual_bookings', function (Blueprint $table) {
            $table->dropIfExists('supplier_reference');
        });
    }
};
