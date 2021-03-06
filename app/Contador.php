<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contador extends Model
{
    //
	protected $table = 'contadores';
	protected $fillable = ['nombre','apellido','cedula','nro_colegiado','email','password','telefono','institucion_univ', 'ano','estatus'];

	protected $hidden = [
        'password', 'remember_token',
    ];
}
