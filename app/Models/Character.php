<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

protected $fillable = ['u_id','meta_name','meta_type', 'pos_q', 'neg_q', 'BOD','AGI','REA','STR','CHA','INTL','LOG','WIL','INI','meta_ability','skills','gear','augments','weapons','contacts','nuyen','back_story'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['quality'] ?? false)
        {
            $query->where('pos_q', 'like', '%'. request('quality'). '%')
                ->orWhere('neg_q', 'like', '%'. request('quality'). '%');
        }

        if($filters['search'] ?? false)
        {
            $query->where('meta_type', 'like', '%'. request('search'). '%')
                ->orWhere('meta_name', 'like', '%'. request('search'). '%')
                ->orWhere('u_id', 'like', '%'. request('search'). '%');
        }
    }
}
