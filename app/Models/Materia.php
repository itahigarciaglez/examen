<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $creditos
 * @property $nombre
 * @property $profesor
 * @property $turno
 * @property $disponible
 * @property $created_at
 * @property $updated_at
 *
 * @property Pivote[] $pivotes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'creditos' => 'required',
		'nombre' => 'required',
		'profesor' => 'required',
		'turno' => 'required',
		'disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['creditos','nombre','profesor','turno','disponible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pivotes()
    {
        return $this->hasMany('App\Models\Pivote', 'materia_id', 'id');
    }
    

}
