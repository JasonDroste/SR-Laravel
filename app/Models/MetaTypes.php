<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MetaTypes extends Model
{
    use HasFactory;

    public static function getMetaData()
    {
        $metaData = DB::table('meta_types')->get();
        return $metaData;
    }

}