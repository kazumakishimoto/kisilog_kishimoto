<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable {
    // use HasFactory;

    public function articles(): HasMany {
        return $this->hasMany('App\Models\Article');
    }

    public function reservations(): HasMany {
        return $this->hasMany('App\Models\Reservation');
    }
}
