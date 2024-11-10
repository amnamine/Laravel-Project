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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID
            $table->string('title');  // Title of the task
            $table->text('description')->nullable();  // Task description, nullable
            $table->boolean('completed')->default(false);  // Completed status
            $table->timestamp('due_date')->nullable();  // Due date for the task
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
