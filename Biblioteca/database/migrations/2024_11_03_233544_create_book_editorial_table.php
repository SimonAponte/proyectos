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
        Schema::create('book_editorial', function (Blueprint $table) {
            $table->timestamps();
            $table->foreignId('book_id')->constrained()->onDelete('cascade');
            $table->foreignId('editorial_id')->constrained()->onDelete('cascade');
            $table->tinyInteger('edition_number');
            $table->string('url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_editorial');
    }
};
