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
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->id();
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_two')->nullable();
            $table->string('website_title')->nullable();
            $table->string('email_address')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('address')->nullable();
            $table->string('base_currency_text')->nullable();
            $table->string('base_currency_symbol')->nullable();
            $table->string('base_currency_symbol_position')->nullable();
            $table->string('maintenance_img')->nullable();
            $table->boolean('maintenance_status')->nullable();
            $table->text('maintenance_msg')->nullable();
            $table->string('footer_logo')->nullable();
            $table->string('admin_theme_version')->default('light');
            $table->float('product_tax_amount')->default(0.0);
            $table->boolean('guest_checkout_status')->default(false);
            $table->boolean('admin_approve_status')->default(true);
            $table->boolean('vendor_admin_approval')->default(true);
            $table->text('vendor_admin_approval_notice')->nullable();
            $table->string('timezone')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_settings');
    }
};
