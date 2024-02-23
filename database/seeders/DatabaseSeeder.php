<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MetaTypes;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\User::factory(2)->create();


       // MetaTypes::create( ['meta_type' => 'Human','BP' => 0, 'BOD' => 1, 'AGI' => 1, 'REA' => 1, 'STR' => 1, 'CHA' => 1, 'INTL' => 1, 'LOG' => 1, 'WIL' => 1, 'INI' => 2, 'meta_ability' => '+1 edge']);

        //MetaTypes::create(['meta_type' => 'Ork','BP' => -20, 'BOD' => 4, 'AGI' => 1, 'REA' => 1, 'STR' => 3, 'CHA' => 1, 'INTL' => 1, 'LOG' => 1, 'WIL' => 1, 'INI' => 2, 'meta_ability' => 'Low-light Vision']);

        //MetaTypes::create(['meta_type' => 'Dwarf','BP' => -25, 'BOD' => 2, 'AGI' => 1, 'REA' => 1, 'STR' => 3, 'CHA' => 1, 'INTL' => 1, 'LOG' => 1, 'WIL' => 2, 'INI' => 2, 'meta_ability' => 'Thermographic  Vision, +2 dice for body tests to resist pathogens and toxins']);

        //MetaTypes::create(['meta_type' => 'Elf','BP' => -30, 'BOD' => 1, 'AGI' => 2, 'REA' => 1, 'STR' => 1, 'CHA' => 3, 'INTL' => 1, 'LOG' => 1, 'WIL' => 2, 'INI' => 2, 'meta_ability' => 'Low-Light Vision']);

        //MetaTypes::create(['meta_type' => 'Troll','BP' => -40, 'BOD' => 5, 'AGI' => 1, 'REA' => 1, 'STR' => 5, 'CHA' => 1, 'INTL' => 1, 'LOG' => 1, 'WIL' => 1, 'INI' => 2, 'meta_ability' => 'Thermographic vision +1 reach, +1 natural armor (cumulative with worn armor)']);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
