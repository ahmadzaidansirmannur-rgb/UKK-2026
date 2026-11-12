<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Tool extends Model
{
     protected $fillable = ['category_id', 'code', 'name', 'stock', 'condition'];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
