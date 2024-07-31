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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('address')->nullable();
            $table->unsignedBigInteger('vendor_id');
            $table->unsignedBigInteger('category_id');
            $table->string('feature_image')->nullable();
            $table->string('video_url')->nullable();
            $table->string('average_rating')->default(0);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->text('aminities')->nullable();
            $table->longText('features')->nullable();
            $table->boolean('visibility')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->unsignedBigInteger('city_id');
            $table->boolean('status')->default(true);
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('restrict');
            $table->foreign('category_id')->references('id')->on('listing_categories')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
