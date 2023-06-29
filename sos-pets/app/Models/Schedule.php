<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'adoption_date',
        'user_id',
        'pet_id',
        'hour',
        'observation',
        'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
