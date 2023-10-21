<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Bus;
use App\Models\User;
use App\Models\Reservation_Transactions;


class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bus_id',
        'transaction_id',
        'destination',
        'reservation_date',
        'departure_time',
        'price',
        'departure_date'
    ];

    public function bus():HasOne {
        return $this->hasOne(Bus::class);
    }

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function reservation():BelongsTo {
        return $this->belongsTo(Reservation::class);
    }
}
