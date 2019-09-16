<?php

use Illuminate\Database\Seeder;
use App\Productos;
class ProductTableSeeder extends Seeder
{
   /**
	 * Run the Products table seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$data = array(
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],

			[
				'producto_nombre' 	=> 'Batido Nutricional de Banano',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Ayuda a manterner un perfecto equilibrio energetico de manera sencilla',
				'producto_precio' 		=> 75.00,
				'producto_imagen' 		=> 'Batido.jpg',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>1000,
				'producto_puntos'		=>3,
				'id_categoria' 	=> 1,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],

			[
				'producto_nombre' 	=> 'Cell Activator',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Vitaminas activadoras de celulas regeneradoras anti edad',
				'producto_precio' 		=> 300.00,
				'producto_imagen' 		=> 'Cell Activator (250X250).png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>130000,
				'producto_puntos'		=>15,
				'id_categoria' 	=> 2,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> 'Cell-u-loss1',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Ideal para la perdida de celulas regenedoras de la piel',
				'producto_precio' 		=> 310.30,
				'producto_imagen' 		=> 'Cell-u-loss1.jpg',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 2,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],
			[
				'producto_nombre' 	=> '24-RebuidStrenght',
				'producto_descrip' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'producto_detalle'	=> 'Producto energetico diseñado para fortalecer el cuerpo',
				'producto_precio' 		=> 275.00,
				'producto_imagen' 		=> '24-RebuidStrenght.png',
				'producto_visible' 		=> 1,
				'producto_cantidad'		=>10,
				'producto_puntos'		=>10,
				'id_categoria' 	=> 3,
				'created_at'=> \Carbon\Carbon::now(),
				'updated_at'=> \Carbon\Carbon::now()
			],

			
		);
 
		Productos::insert($data);
 
	}
 
}
