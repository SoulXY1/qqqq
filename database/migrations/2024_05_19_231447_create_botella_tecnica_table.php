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
        Schema::create('botella_tecnica', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('botella_id');
            $table->unsignedBigInteger('tecnica_id');
            $table->timestamps();

            $table->foreign('botella_id')->references('id')->on('botellas')->onDelete('cascade');
            $table->foreign('tecnica_id')->references('id')->on('tecnicas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('botella_tecnica');
    }
};
