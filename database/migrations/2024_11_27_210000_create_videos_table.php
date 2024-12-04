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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('video_type');
            $table->string('url');
            $table->string('link_type');
            $table->string('thumbnail');
            $table->text('description');
            $table->string('department')->nullable();
            $table->date('date');
            $table->unsignedBigInteger('click_count')->default(0);
            $table->foreignId('playlist_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
