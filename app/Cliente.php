<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
   protected $table = 'clientes';
	protected $fillable = ['nombre','apellido','cedula','nro_colegiado_cont','email','telefono'];

}
