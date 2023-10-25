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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 55)->nullable();
            $table->string('trade_name', 55)->nullable();
            $table->string('slug', 55)->nullable();
            $table->string('rfc', 13)->nullable();
            $table->string('email', 55)->nullable();
            $table->string('phone', 55)->nullable();
            $table->string('address', 55)->nullable();
            $table->string('status', 55)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
