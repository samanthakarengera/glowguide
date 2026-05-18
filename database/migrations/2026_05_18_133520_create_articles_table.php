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
        Schema::create('articles', function (Blueprint $table) {
            
            //Model properties
            $table->id();
            $table->string('title');
            $table->string('image_path')->nullable();
            $table->text('body');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            
            //Model relation properties
            $table->foreignId('author_id');
            $table->foreignId('category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
