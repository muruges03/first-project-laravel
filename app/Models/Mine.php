<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mine extends Model
{
    use HasFactory;

    protected $fillable =['name', 'location', 'runing'];
    
    public function stoneTypes()
    {
        return $this->belongsToMany(StoneType::class, 'mine_stone_type');
    }
}
