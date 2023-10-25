<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;


class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'reservation_id',
        'ticket_number',
        'transaction_date',
        
    ];
    
    public function user():BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function reservation():BelongsTo {
        return $this->BelongsTo(Reservation::class)->orderBy('created_at', 'desc');
    }
}
