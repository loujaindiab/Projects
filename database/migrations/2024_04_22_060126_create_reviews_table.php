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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('professionalism');
            $table->bigInteger('communication');
            $table->bigInteger('quality');
            $table->bigInteger('commit_to_deadlines');
            $table->bigInteger('re_employee');
            $table->bigInteger('experience');
            $table->text('description');
            $table->foreignId('project_id')->constrained('projects')->cascadeOnDelete();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};