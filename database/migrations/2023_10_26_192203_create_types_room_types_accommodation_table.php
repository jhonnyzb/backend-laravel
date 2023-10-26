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
        Schema::create('types_room_types_accommodation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('typeRoom_id');
            $table->foreign('typeRoom_id')
                ->references('id')
                ->on('types_room')->onDelete('cascade');
            $table->bigInteger('typesAccommodation_id');
            $table->foreign('typesAccommodation_id')
                ->references('id')
                ->on('types_accommodation')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types_room_types_accommodation');
    }
};
