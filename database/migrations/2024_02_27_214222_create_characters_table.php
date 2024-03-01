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
        Schema::create('characters', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->integer('u_id');
            $table->string('meta_name');
            $table->string('meta_type');

            $table->longText('pos_q');
            $table->longText('neg_q');

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

            $table->longText('skills');
            $table->longText('gear');
            $table->longText('augments');
            $table->longText('weapons');
            $table->longText('contacts');
            $table->integer('nuyen');
            $table->longText('back_story');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
