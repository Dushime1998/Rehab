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
        Schema::create('admin_mngs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('IDnumber')->nullable();
            $table->string('phone')->nullable();
            $table->string('degree')->nullable();
            $table->string('status')->nullable();
            $table->string('company')->nullable();
            $table->string('option');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_mngs');
    }
};
