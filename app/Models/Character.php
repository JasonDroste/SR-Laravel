<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

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
