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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marital_status_id')->constrained('marital_status')->cascadeOnDelete();
            $table->foreignId('address_id')->constrained('address')->cascadeOnDelete();
            $table->string('name');
            $table->string('gender');   
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->date('date_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
