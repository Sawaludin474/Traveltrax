<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function travelpackage(): BelongsTo
    {
        return $this->belongsTo(TravelPackage::class);
    }

    public function transaction_detail(): HasOne
    {
        return $this->hasOne(TransactionDetail::class);
    }
}
