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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('');
            $table->string('person_email')->unique();
            $table->string('person_phone')->nullable();
            $table->string('management_name');
            $table->string('management_email')->unique();
            $table->string('management_phone')->nullable();
            $table->string('user_name');
            $table->string('password');
            $table->string('company_name');
            $table->string('company_reg_no');
            $table->string('nature_of_business');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('currency');
            $table->string('pincode');
            $table->string('website');
            $table->integer('is_active')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
