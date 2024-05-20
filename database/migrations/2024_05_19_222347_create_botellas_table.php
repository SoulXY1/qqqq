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
        Schema::create('botellas', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->string("nombre");
            $table->string("marca");
            $table->string("tipo");
            $table->float("capacidad");
            $table->float("precio");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('botellas');
    }
};
