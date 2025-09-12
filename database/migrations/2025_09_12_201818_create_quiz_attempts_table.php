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
       Schema::create('quiz_attempts', function (Blueprint $table) {
    $table->id();
    $table->foreignId('quiz_id')->constrained()->cascadeOnDelete();
    $table->foreignId('student_id')->constrained('users')->cascadeOnDelete();
    $table->integer('score')->nullable();
    $table->integer('attempt_number')->default(1);
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_attempts');
    }
};
