<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'booking';
    protected $primaryKey = 'id';
    protected $fillable = [
        'pitch_id',
        'customer_id',
        'Booking',
    ];

    //1 booking sẽ chỉ có 1 user và 1 sân bóng
    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function Pitch(): BelongsTo
    {
        return $this->belongsTo(Pitch::class);
    }
}
