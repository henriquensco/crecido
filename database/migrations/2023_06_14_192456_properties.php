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
        Schema::create('properties', function (Blueprint $table) {
            $table->uuid('id')->autoIncrement();
            $table->string('title');
            $table->string('image');
            $table->string('street');
            $table->string('number');
            $table->string('reference');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');

            $table->string('owner_id');
            $table->timestamps();
        });

        /* Schema::table('properties', function (Blueprint $table) {
            $table->foreign('owner_id')->references('id')->on('owners');
        }); */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
