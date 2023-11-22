<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'descripcio', 'hores_totals'];

    // Relación con Programació
    public function programacio()
    {
        return $this->belongsTo(Programacion::class, 'programacio_id');
    }

    // Relación muchos a muchos con UFs
    public function ufs()
    {
        return $this->belongsToMany(Uf::class, 'modul_uf', 'modul_id', 'uf_id');
    }
}
