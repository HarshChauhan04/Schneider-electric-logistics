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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_location');
            $table->string('delivery_location');
            $table->integer('weight');
            $table->string('cargo_type');
            $table->date('pickup_date');
            $table->decimal('priority', 4, 1);
            $table->decimal('vehicle_class', 4, 1);
            $table->decimal('estimated_cost', 10, 2);
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
