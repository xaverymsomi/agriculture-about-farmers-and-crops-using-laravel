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
        Schema::create('weather__forecasts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Temperature');
            $table->string('Rainfall');
            $table->date('Date');
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps(); 
            // UserID (Foreign Key)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather__forecasts');
    }
};
