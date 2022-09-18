<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'slug',
        'title',
        'body',
        'contact_title',
        'contact_subtitle'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
