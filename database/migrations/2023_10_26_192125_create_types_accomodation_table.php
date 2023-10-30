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
        Schema::create('types_accommodation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('type_id');
            $table->foreign('type_id')
                ->references('id')
                ->on('types')->onDelete('cascade');
            $table->bigInteger('accommodation_id');
            $table->foreign('accommodation_id')
                ->references('id')
                ->on('accommodation')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types_accommodation');
    }
};
