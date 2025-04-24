<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';

    // Modified scopeList without 'is_active'
    public function scopeList($query)
    {
        return $query; // Returns all recipes, or modify this query as needed
    }

    public function scopeRecipe($query, $id)
    {
        return $query->where('id', $id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}