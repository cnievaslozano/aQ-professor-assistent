<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitat extends Model
{
    use HasFactory;

    public function programacio()
    {
        return $this->belongsTo(Programacion::class, 'programacio_id');
    }
}
