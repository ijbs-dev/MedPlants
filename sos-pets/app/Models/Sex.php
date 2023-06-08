<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;

    protected $fillable = [
        'sexo'
    ];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }
}
