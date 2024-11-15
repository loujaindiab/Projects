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
        Schema::create('plan__features', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->foreignId('plan_id')->constrained('plans')->cascadeOnDelete();;
            $table->foreignId('feature_id')->constrained('features')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan__features');
    }
};