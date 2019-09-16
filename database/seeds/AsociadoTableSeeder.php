<?php

use Illuminate\Database\Seeder;

class AsociadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

        $data = array(
			[
            'asociado_cui' => '3003380820100',
            'asociado_nombre' => 'Diana Cecilia ',
            'asociado_primerApellido' => 'Alvarado',
            'asociado_segundoApellido' => 'Salazar',
            'asociado_tel' => '31143334',
            'asociado_nacimiento' => '1997-08-14',
            'asociado_estado' => 'a',
            'asociado_genero' => '0',
            'padre' => 0,
            'id_nivel' => 1,
            'id_direccion' => 1,
            //'asociado_pass' => Hash::make('123diana'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
        ],
        );

        Asociado::insert($data);
 
    }
}
