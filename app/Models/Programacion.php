<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programacion extends Model
{
    use HasFactory;

    protected $table = 'programacions';

    protected $fillable = ['any_academic', 'descripcio'];

    // Relación con User (User)
    public function usuari()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación muchos a muchos con Moduls
    public function moduls()
    {
        return $this->belongsToMany(Modul::class, 'programacio_modul', 'programacio_id', 'modul_id');
    }

    // Relación uno a muchos con Activitats
    public function activitats()
    {
        return $this->hasMany(Activitat::class, 'programacio_id');
    }
}
