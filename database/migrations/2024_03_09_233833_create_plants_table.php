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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('family')->nullable();
            $table->string('genus')->nullable();
            $table->string('species')->nullable();
            $table->string('variety')->nullable(); // New: Specific variety of the plant
            $table->string('origin')->nullable();
            $table->string('growth_form')->nullable(); // New: Form of growth (tree, shrub, vine, etc.)
            $table->string('growth_rate')->nullable(); // New: Rate of growth (slow, medium, fast)
            $table->string('watering')->nullable();
            $table->string('light')->nullable();
            $table->string('soil_type')->nullable(); // New: Preferred soil type (sandy, loamy, clay, etc.)
            $table->string('fertilizer_requirements')->nullable(); // New: Fertilizer needs
            $table->string('temperature')->nullable();
            $table->string('zone')->nullable(); // New: USDA hardiness zone
            $table->string('pest_resistance')->nullable(); // New: Resistance to pests
            $table->string('pest')->nullable(); // New: Resistance to diseases
            $table->text('care_instructions')->nullable();
            $table->text('propagation_methods')->nullable(); // New: Methods of propagation (seeds, cuttings, etc.)
            $table->text('notes')->nullable();
            $table->text('description')->nullable();
            $table->integer('quantity')->nullable();
            $table->boolean('is_fruiting')->default(false); // New: Whether the plant bears fruit
            $table->boolean('is_edible')->default(false); // New: Whether the plant is edible
            $table->string('flower_color')->nullable(); // New: Color of the flowers
            $table->string('leaf_color')->nullable(); // New: Color of the leaves
            $table->string('seasonality')->nullable(); // New: When the plant typically grows or blooms
            $table->boolean('is_indoor')->default(false); // New: Whether the plant is typically grown indoors
            $table->boolean('is_perennial')->default(false); // New: Whether the plant is perennial
            $table->float('height')->nullable(); // New: Typical height of the plant
            $table->integer('width')->nullable(); // New: Typical width or spread of the plant
            $table->string('fruit_color')->nullable(); // New: Color of the fruit, if applicable
            $table->string('bloom_time')->nullable(); // New: When the plant typically blooms
            $table->string('harvest_time')->nullable(); // New: When the fruit or produce is typically harvested
            $table->boolean('is_medicinal')->default(false); // New: Whether the plant has medicinal uses
            $table->text('medicinal_uses')->nullable(); // New: Description of medicinal uses, if applicable
            $table->boolean('is_poisonous')->default(false); // New: Whether the plant is poisonous
            $table->text('poisonous_treatment')->nullable(); // New: Description of treatment if ingested or touched, if poisonous
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
