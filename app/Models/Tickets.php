<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Tickets extends Model
{
    use HasFactory;

    protected $table = 'tickets';
    protected $hidden = [
        'hash',
    ];
    protected $fillable = [
        'showtime_id',
        'seat_places',
        'hash',
        'cost',
        'start_date',
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function data(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value, true),
            set: fn($value) => json_encode($value),
        );
    }
}
