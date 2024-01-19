<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable =[
        'travel_package_id',
        'image',
    ];

    public function travelpackage(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class, 'travel_package_id');
    }
}
