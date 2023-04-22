<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
        'Sex',
        'phoneNumber',
    ];

    //1 User có thể đặt được nhiều Sân Bóng
    public function Booking(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
