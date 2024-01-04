<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TravelPackage extends Model
{
    use HasFactory;

    public function galery(): HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
