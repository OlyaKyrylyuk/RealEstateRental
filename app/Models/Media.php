<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'estate_id',
        'type',
        'value',
    ];

    public function estate(): BelongsTo
    {
        return $this->belongsTo(Estate::class);
    }
}
