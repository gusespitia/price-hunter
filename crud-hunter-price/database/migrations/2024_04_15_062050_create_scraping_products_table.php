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
        Schema::create('scraping_products', function (Blueprint $table) {
            $table->id();
            $table->string('scraping_products_slug');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_store');
            $table->boolean('scraping_products_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scraping_products');
    }
};
