<?php

namespace App\Models;


class MetaTypes {

  public static function allMeta(){

      return [
        ['meta_type' => 'Human','BP' => 0, 'BOD' => 1, 'AGI' => 1, 'REA' => 1, 'STR' => 1, 'CHA' => 1, 'INT' => 1, 'LOG' => 1, 'WIL' => 1, 'INI' => 2, 'meta_ability' => '+1 edge'],
        ['meta_type' => 'Ork','BP' => -20, 'BOD' => 4, 'AGI' => 1, 'REA' => 1, 'STR' => 3, 'CHA' => 1, 'INT' => 1, 'LOG' => 1, 'WIL' => 1, 'INI' => 2, 'meta_ability' => 'Low-light Vision'],
        ['meta_type' => 'Dwarf','BP' => -25, 'BOD' => 2, 'AGI' => 1, 'REA' => 1, 'STR' => 3, 'CHA' => 1, 'INT' => 1, 'LOG' => 1, 'WIL' => 2, 'INI' => 2, 'meta_ability' => 'Thermographic  Vision, +2 dice for body tests to resist pathogens and toxins'],
        ['meta_type' => 'Elf','BP' => -30, 'BOD' => 1, 'AGI' => 2, 'REA' => 1, 'STR' => 1, 'CHA' => 3, 'INT' => 1, 'LOG' => 1, 'WIL' => 2, 'INI' => 2, 'meta_ability' => 'Low-Light Vision'],
        ['meta_type' => 'Troll','BP' => -40, 'BOD' => 5, 'AGI' => 1, 'REA' => 1, 'STR' => 5, 'CHA' => 1, 'INT' => 1, 'LOG' => 1, 'WIL' => 1, 'INI' => 2, 'meta_ability' => 'Thermographic vision +1 reach, +1 natural armor (cumulative with worn armor)'],
      ];
  }


  public static function findMeta($id){
    $metaTypes = self::allMeta();

    foreach($metaTypes as $metaType){
      if ($metaType['meta_type'] == $id){
        return $metaType;
      }

    }
  }

}