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
           $table->id();
            $table->string('title')->nullable();            // e.g. title can be null
            $table->text('description')->nullable();        // description longer text
            $table->string('image')->nullable();            // path or URL to image
            $table->decimal('price', 10, 2)->default(0);    // price with two decimal places
            $table->decimal('compare_price', 10, 2)->nullable(); // optional compare price
            $table->string('sku', 100)->unique();           // SKU needs uniqueness
            $table->string('barcode', 100)->nullable();     // barcode if needed
            $table->unsignedInteger('qty')->default(0);     // quantity in stock
            $table->unsignedBigInteger('category_id');      // foreign key to categories
            $table->unsignedBigInteger('sub_category_id');  // foreign key to subcategories
            $table->unsignedBigInteger('brand_id')->nullable(); // optional brand link
            $table->boolean('is_featured')->default(false); // featured flag
            $table->boolean('status')->default(1);          // status flag (e.g. active/inactive)
            $table->timestamps();

            // Define FK constraints if needed:
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sub_category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
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
