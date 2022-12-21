<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Support\Facades\DB;

class Article extends Model {
    // use HasFactory;

    protected $fillable = [
        'body',
        'image',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo('App\Models\User');
    }
}
