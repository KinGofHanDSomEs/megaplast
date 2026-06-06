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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();

            $table->string('icon_url');
            $table->string('name');
            $table->string('experience')->nullable();
            $table->string('schedule');
            $table->string('duties')->nullable();
            $table->string('requirements')->nullable();
            $table->string('conditions')->nullable();
            $table->integer('min_salary')->nullable();
            $table->integer('max_salary')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
