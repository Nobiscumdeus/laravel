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
        Schema::create('sundaybethelattendance', function (Blueprint $table) {
            $table->id();
            $table->integer('men')->default(0);
            $table->integer('women')->default(0);
            $table->integer('children')->default(0);
            $table->integer('guests')->default(0);
            $table->integer('converts')->default(0);
            $table->integer('total')->default(0);
            $table->string('message')->nullable();
            $table->string('minister')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sundaybethelattendance');
    }
};
