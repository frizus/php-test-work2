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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status')->nullable();
            $table->float('weight');
            $table->foreignId('region_id')->nullable();
            $table->time('delivery_hours_start');
            $table->time('delivery_hours_end');
            $table->foreignId('courier_id')->nullable();
            $table->datetime('complete_time')->nullable();
            $table->timestamps();

            $table->index('courier_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
