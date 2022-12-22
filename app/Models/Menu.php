<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model {
    // use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo('App\Models\User');
    }
}
