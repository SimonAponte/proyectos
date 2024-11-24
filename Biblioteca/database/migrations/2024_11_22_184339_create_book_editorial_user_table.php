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
            $table->id();
            $table->timestamps();
            $table->text('comment');
            $table->foreignId('book_editorial_id')->constrained('book_editorial')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            
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
