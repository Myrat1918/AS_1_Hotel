<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;
        protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'city_id',
        'name',
        'address',
        'phone_number' ,
        'email',
        'star' ,
    ];
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function hotels(){
        return $this->hasMany(Hotel::class);
    }
}
