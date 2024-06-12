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
            $table->text('user_id')->nullable();
            $table->text('category')->nullable();
            $table->text('title')->nullable();
            $table->text('price')->nullable();
            $table->text('content')->nullable();
            $table->text('transaction_type')->nullable();
            $table->text('date')->nullable();
            $table->text('city')->nullable();
            $table->text('address')->nullable();
            $table->text('author')->nullable();
            $table->text('telephone')->nullable();
            $table->text('connection')->nullable();
            $table->text('home_type')->nullable();
            $table->text('room_count')->nullable();
            $table->text('additional_attr')->nullable();
            $table->text('total_square')->nullable();
            $table->text('living_square')->nullable();
            $table->text('kitchen_square')->nullable();
            $table->text('bathroom')->nullable();
            $table->text('repair')->nullable();
            $table->text('furniture')->nullable();
            $table->text('technique')->nullable();
            $table->text('internet_tv')->nullable();
            $table->text('material_house')->nullable();
            $table->text('year_building')->nullable();
            $table->text('count_floors')->nullable();
            $table->text('elevator')->nullable();
            $table->text('parking')->nullable();
            $table->text('maximum_guests')->nullable();
            $table->text('possible_children')->nullable();
            $table->text('possible_pets')->nullable();
            $table->text('possible_smoking')->nullable();
            $table->text('communal_services')->nullable();
            $table->text('other_services')->nullable();
            $table->text('deposit')->nullable();
            $table->text('image')->nullable();
            $table->text('video')->nullable();
            $table->text('animation')->nullable();
            $table->text('active')->nullable();
            $table->timestamps();

            $table->softDeletes();

            //$table->index('category', 'product_category_idx');
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
