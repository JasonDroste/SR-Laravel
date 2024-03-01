<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetaDDLController extends Controller
{
    public static function getMetaType()
    {
        $metaTypes = DB::table('meta_types')->get();
        return $metaTypes;
    }
}
