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
        Schema::create('hotels_types_room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hotel_id');
            $table->foreign('hotel_id')
                ->references('id')
                ->on('hotels')->onDelete('cascade');
            $table->bigInteger('typesRoom_id');
            $table->foreign('typesRoom_id')
                ->references('id')
                ->on('types_room')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels_types_room');
    }
};
