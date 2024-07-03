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
        Schema::create('elabel_recycling_rules', function (Blueprint $table) {
            $table->id();
            $table->string('recycling_rule_containers_id')->unique();
            $table->string('recycling_rule_materials_id')->unique();
            $table->string('elabel_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('elabel_recycling_rules');
    }
};
