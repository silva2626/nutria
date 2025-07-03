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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('occupation');
            $table->text('address');
            $table->string('phone');
            $table->string('cpf');
            $table->text('clinical_history')->nullable();
            $table->float('weight');
            $table->float('height');
            $table->float('body_fat_percentage')->nullable();
            $table->text('food_allergies')->nullable();
            $table->text('observation')->nullable();
            $table->integer('physical_activity_frequency');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
