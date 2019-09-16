<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
            'email' => 'gerardol@gmail.com',
            'asociado_membrecia' => 2,
            
            'password' => Hash::make('689965115a'), //Hash:make crea una clave, Siempre generará un hash diferente aunque usemos el mismo texto
            'created_at'=> \Carbon\Carbon::now(), //Carbon es un componente laravel para gestionar fechas
            'updated_at'=> \Carbon\Carbon::now()
            ],
        
        
        );

        User::insert($data);
    }
}
