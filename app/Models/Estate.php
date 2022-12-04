<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Estate extends Model
{
    use HasFactory;

    public const TYPE_FLAT = 'flat';
    public const TYPE_HOUSE = 'house';
    public static $types = [
        self::TYPE_FLAT => 'квартира',
        self::TYPE_HOUSE => 'будинок',
    ];

    protected $fillable = [
        'user_id',
        'address_id',
        'type',
        'number_of_rooms',
        'ground',
        'pay_for_communals',
        'communals_price',
        'description',
        'area',
        'is_busy',
    ];

    public function media(): hasOne
    {
        return $this->hasOne(Media::class);
    }

    public function address(): belongsTo
    {
        return $this->belongsTo(Address::class);
    }
}
