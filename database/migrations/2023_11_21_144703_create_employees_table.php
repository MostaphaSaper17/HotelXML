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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id')->onDelete('cascade');
            $table->string('user_name')->unique();
            $table->string('password');
            $table->integer('status')->default(0);
            $table->integer('book')->default(0);
            $table->integer('cancel')->default(0);
            $table->integer('pay')->default(0);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('designation');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('mobile')->nullable();
            $table->string('country');
            $table->string('city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
