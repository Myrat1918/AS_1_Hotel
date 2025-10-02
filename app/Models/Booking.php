<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'room_id',
        'guest_id',
    ];
    
    protected $fillable = [
        'name',
        'check_in_at',
        'check_out_at',
    ];

    public function guests() {
        return $this->belongsTo(Guest::class);
    }
    public function rooms() {
        return $this->belongsTo(Room::class);
    }
}
