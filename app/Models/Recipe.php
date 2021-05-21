<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'ingredients',
        'description',
        'pic',
        'food_type',
        'category_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
