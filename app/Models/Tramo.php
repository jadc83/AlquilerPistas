<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramo extends Model
{
    use HasFactory;

    protected $fillable = ['horario'];

    public function dias()
    {
        return $this->belongsToMany(Dia::class);
    }
}
