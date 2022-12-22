<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model {
    // use HasFactory;

    protected $fillable = [
        'body',
        'number',
        'datetime',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo('App\Models\User');
    }
}
