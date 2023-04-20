<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Make',
        'Model',
        'TravelledDistance',
    ];

    public function Parts()
    {
        return $this->belongsToMany(Parts::class, 'cars_parts', 'car_id', 'part_id');
    }

    public function Sale()
    {
        return $this->hasOne(Sales::class, 'car_id', 'id');
    }

}
