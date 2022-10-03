<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;

    protected $appends = [
        'capital'
    ];

    protected $fillable = [
        'name',
        'slug',
        'body',
        'diseases'
    ];

    protected $casts = [
        'diseases' => 'array'
    ];

    public function getCapitalAttribute()
    {
        return substr($this->name, 0, 1);
    }
}
