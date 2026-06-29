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

            $table->enum('status', ['rejected', 'review', 'refine', 'accepted', 'completed'])->default('review');
            $table->string('message');
            $table->string('montage_address')->nullable();
            $table->integer('remaining_price')->nullable();
            $table->dateTime('execution_at')->nullable();
            $table->string('rejection_message')->nullable();
            $table->integer('price')->nullable();

            $table->timestamps();
            $table->softDeletes();
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
