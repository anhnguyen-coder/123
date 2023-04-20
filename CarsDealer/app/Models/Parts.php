<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Parts extends Model
{
    use HasFactory;
    protected $table = 'parts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Name',
        'Price',
        'SupplierId',
    ];

    public function Supplier(): BelongsTo
    {
        return $this->belongsTo(Suppliers::class);
    }

    public function Cars(): BelongsToMany
    {
        return $this->belongsToMany(Cars::class);
    }
}
