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
        Schema::create('meta_types', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('meta_type');
            $table->integer('BP');
            $table->integer('BOD');
            $table->integer('AGI');
            $table->integer('REA');
            $table->integer('STR');
            $table->integer('CHA');
            $table->integer('INTL');
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
