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
        Schema::create('elabel', function (Blueprint $table) {
            $table->id();
            $table->string('public_id')->unique();
            $table->string('product_name')->nullable();
            $table->string('sku')->nullable();
            $table->string('status')->nullable();
            $table->string('qr')->nullable();
            $table->string('type')->nullable();
            $table->string('country')->nullable();
            $table->string('vintage_year')->nullable();
            $table->string('product_varieties')->nullable();
            $table->string('alcohol_content_percentage')->nullable();
            $table->string('net_content')->nullable();
            $table->string('description')->nullable();
            $table->string('alcohol_by_volume')->nullable();
            $table->string('residual_sugar')->nullable();
            $table->string('organic_acid')->nullable();
            $table->string('glycerol')->nullable();
            $table->string('symplify_display_of_negligible_values')->nullable();
            $table->string('sustainibility_bio')->nullable();
            $table->string('sustainibility_message')->nullable();
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elabel');
    }
};
