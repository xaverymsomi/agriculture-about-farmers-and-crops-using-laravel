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
        Schema::create('farm__management', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('PlantingDate');
            $table->date('HarvestDate');
            $table->string('FertilizerUsage');
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('CropID');
            // Creating a foreign key 
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('CropID')->references('id')->on('crop__information')->onDelete('cascade');
            // UserID (Foreign Key)
            // CropID (Foreign Key)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm__management');
    }
};
