<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'user_id',
        'port_id',
        'type_id',
        'sex_id',
        'idade',
        'raca',
        'descricao',
        'fotos',
        'date_visit'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function schedule() {
        return $this->hasMany(Schedule::class);
    }

    public function type() {
        return $this->hasOne(Type::class);
    }

    public function port() {
        return $this->hasOne(Port::class);
    }

    public function sex() {
        return $this->hasOne(Sex::class);
    }
}
