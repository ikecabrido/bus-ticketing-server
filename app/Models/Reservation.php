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
        'bus_id',
        'destinationFrom',
        'destinationTo',
        'reservation_date',
        'departure_time',
        'price',
        'departure_date',     
    ];

    public function bus():BelongsTo {
        return $this->belongsTo(Bus::class);
    }

    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function reservation():HasOne {
        return $this->hasOne(Reservation::class);
    }
}
