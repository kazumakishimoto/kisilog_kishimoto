<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Banner extends Model {
    // use HasFactory;

    public function shop(): BelongsTo {
        return $this->belongsTo('App\Models\Shop');
    }
}
