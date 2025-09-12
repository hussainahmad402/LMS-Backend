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
       Schema::create('lesson_progress', function (Blueprint $table) {
    $table->id();
    $table->foreignId('enrollment_id')->constrained()->cascadeOnDelete();
    $table->foreignId('lesson_id')->constrained()->cascadeOnDelete();
    $table->enum('status', ['not_started','in_progress','completed'])->default('not_started');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_progress');
    }
};
