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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id')->autoIncrement();
            $table->string('product_name');
            $table->longText('product_details');
           $table->decimal('product_price', 10, 2);
            // $table->foreignId('category_id')->constrained('categories');
            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->bigInteger('product_account');
            $table->string('product_photopath');
            $table->timestamps();

            // $table->foreign('category_id')->references('product_id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
