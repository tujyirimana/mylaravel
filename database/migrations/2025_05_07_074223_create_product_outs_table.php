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
        Schema::create('product_out', function (Blueprint $table) {
            $table->id('ProductOut_id');
            $table->string('PCode'); // Foreign key to products table
            $table->date('prOut_Date');
            $table->integer('prOut_Quantity');
            $table->decimal('prOut_Unit_Price', 8, 2);
            $table->decimal('prOut_TotalPrice', 10, 2);
            $table->timestamps();

            // Define the foreign key relationship
            $table->foreign('PCode')->references('PCode')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_out');
    }
};