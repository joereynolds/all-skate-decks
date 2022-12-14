<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deck_variations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');
            $table->year('year')->nullable();
            $table->foreignId('deck_id');
            $table->foreignId('artist_id')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deck_variations');
    }
};
