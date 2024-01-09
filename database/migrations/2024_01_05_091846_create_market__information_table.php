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
        Schema::create('market__information', function (Blueprint $table) {
            $table->bigIncrements('MarketID');
            $table->string('MarketName');
            $table->string('Price');
            $table->string('Demand');
            $table->date('Date');
            $table->unsignedBigInteger('CropID');
            // Creating a foreign key 
            $table->foreign('CropID')->references('id')->on('crop__information')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market__information');
    }
};
