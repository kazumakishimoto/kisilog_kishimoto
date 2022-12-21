<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model {
    // use HasFactory;

    public function menus(): HasMany {
        return $this->hasMany('App\Models\Menu');
    }

    public function oupons(): HasMany {
        return $this->hasMany('App\Models\Coupon');
    }

    public function banners(): HasMany {
        return $this->hasMany('App\Models\Banner');
    }
}
