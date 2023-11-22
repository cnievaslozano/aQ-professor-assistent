<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programacion
 *
 * @property $id
 * @property $users_id
 * @property $any_academic
 * @property $descripcio
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programacion extends Model
{
    
    static $rules = [
		'users_id' => 'required',
		'any_academic' => 'required',
		'descripcio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['users_id','any_academic','descripcio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'users_id');
    }
    

}
