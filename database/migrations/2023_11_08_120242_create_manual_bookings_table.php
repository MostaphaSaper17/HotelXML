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
        Schema::create('manual_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone');
            $table->string('check_in_date');
            $table->string('check_out_date');
            $table->string('room_numbers');
            $table->string('adults_number');
            $table->string('children_number');
            $table->string('nationality');
            $table->string('hotel_name');
            $table->string('room_meal');
            $table->string('country');
            $table->string('city');
            $table->string('hotel_address');
            $table->string('hotel_phone');
            $table->string('booking_status');
            $table->string('confirmation_number')->nullable();
            $table->string('supplier_name');
            $table->string('supplier_currency');
            $table->string('amount');
            $table->string('markup');
            $table->string('agent_currency');
            $table->string('cancellation_policy');
            $table->string('booking_notes');
            $table->integer('send_email')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manual_bookings');
    }
};
