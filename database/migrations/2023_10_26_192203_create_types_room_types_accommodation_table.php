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
        Schema::create('hotels_typeAccommodation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hotel_id');
            $table->foreign('hotel_id')
                ->references('id')
                ->on('hotels')->onDelete('cascade');
            $table->bigInteger('typeAccommodation_id');
            $table->foreign('typeAccommodation_id')
                ->references('id')
                ->on('types_accommodation')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels_typeAccommodation');
    }
};
