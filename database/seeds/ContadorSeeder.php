<?php

use App\Contador;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		Contador::create([
			'nombre' => 'José',
			'apellido' => 'Alvarez',
			'cedula' => 16310482,
			'nro_colegiado' => 98765,
			'email' => 'josealvarez@gmail.com',
			'password' => '12345',
			'telefono' => '0412-3233323',
			'institucion_univ' => 'Escuela de Contadores',
			'ano' => 2002,
			'estatus' => true,
		]);
		Contador::create([
			'nombre' => 'Miguel',
			'apellido' => 'Peña',
			'cedula' => 17960559,
			'nro_colegiado' => 12345,
			'email' => 'miguelpena@gmail.com',
			'password' => '98765',
			'telefono' => '0412-23456775',
		]);

    }
}
