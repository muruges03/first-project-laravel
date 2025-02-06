<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stoneType extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function mines()
    {
        return $this->belongsToMany(Mine::class, 'mine_stone_type');
    }

}
