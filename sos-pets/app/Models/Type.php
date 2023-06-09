<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo'
    ];

    public function pet() {
        return $this->belongsTo(Pet::class);
    }


}
