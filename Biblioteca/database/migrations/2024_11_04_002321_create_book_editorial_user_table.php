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
        Schema::create('book_editorial_user', function (Blueprint $table) {
            
            $table->foreignId('book_id')->constrained('book_editorial', 'book_id')->onDelete('cascade');
            $table->foreignId('editorial_id')->constrained('book_editorial', 'editorial_id')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->primary(['book_id', 'editorial_id', 'user_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_editorial_user');
    }
};
