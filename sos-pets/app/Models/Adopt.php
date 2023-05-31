<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopt extends Model
{
    use HasFactory;

    protected $fillable = [
        'adoption_date',
        'user_id',
        'pet_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pets() {
        return $this->belongsTo(Pet::class);
    }
}
