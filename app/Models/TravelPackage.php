<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TravelPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'location', 'about', 'departure_date', 'duration', 'type', 'price',
    ];


    public function gallery(): HasMany
    {
        return $this->hasMany(Gallery::class, 'travel_package_id');
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
