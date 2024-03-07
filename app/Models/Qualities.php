<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Qualities extends Model
{
    use HasFactory;

    public static function getPositiveQualities()
    {
        $positive = DB::table('positive_qualities')->get();
        return $positive;
    }
}
