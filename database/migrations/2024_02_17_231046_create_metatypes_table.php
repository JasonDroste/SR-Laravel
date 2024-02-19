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
        Schema::create('metatypes', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->string('meta_type');
            $table->integer('BP');
            $table->integer('BOD');
            $table->integer('AGI');
            $table->integer('REA');
            $table->integer('STR');
            $table->integer('CHA');
            $table->integer('INTl');
            $table->integer('LOG');
            $table->integer('WIL');
            $table->integer('INI');
            $table->longText('meta_ability');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metatypes');
    }
};
