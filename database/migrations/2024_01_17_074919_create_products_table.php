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
            $table->integer('user_id')->nullable();
            $table->integer('category');
            $table->string('title');
            $table->integer('price');
            $table->text('content');
            $table->boolean('active')->default(1);
            $table->timestamps();

            $table->softDeletes();

            $table->index('category', 'product_category_idx');
            //$table->foreign('category', 'product_category_fk')->on('categories')->references('id');
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
