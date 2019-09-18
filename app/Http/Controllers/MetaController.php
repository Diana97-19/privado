<?php

namespace App\Http\Controllers;
use App\Volumen; 
use App\Asociado; 
use App\Compra;
use App\User;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MetaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');

        if (!\Session::has('arraysaldo')) \Session::put('arraysaldo',array());
    } 

    public function index()
    {   

        $date = Carbon::now();
        $fecha = $date->format('d-m-Y');
        $mes = $date->format('m');
        $anio = $date->format('Y');
        $volumenl=0;

        $volumen= $this->volumen($mes,$anio);
        $asociado = Asociado ::findOrFail( auth()->user()->asociado_membrecia);

         $this->linea();

           $volumenl=$this->volumenlinea($mes,$anio);
       
        
             return view('dash.meta.meta', [ 
                 'volumen'=> $volumen,
                 'asociado'=>$asociado,
                 'volumenl'=> $volumenl,
                  'porcenP' =>$porcenP=$this->porcentaje($volumen,$asociado->nivel->puntosP),
                  'porcenL' =>$porcenL=$this->porcentaje($volumenl,$asociado->nivel->puntosL),
                  'fecha'=> $fecha
                 ]);
        
    } 


    //CALCULO DE VALORES RESTANTES Y TOTALES 


    private function volumen ($mes,$anio)
    {  
        $total=0;
        $id= auth()->user()->asociado_membrecia;
        
      $compras=Compra::whereMonth('created_at', $mes)
                      ->whereYear('created_at', $anio)
                      ->where("asociado_membrecia","=",$id)
                      ->get();

         
foreach ($compras as $compra) {
          
           $total+= $compra->compra_totalVolumen;
        }
        return $total;
    }


    public function porcentaje($acumulado,$total)
    {   
        $porcen=0;
        
        if ($total!=0) {
            $porcen= (($acumulado*100)/$total);
        }
       
        // if ($porcen>100) {
        //     $porcen=100;
        // }
        return $porcen;
    }

   
 private function volumenlinea($mes,$anio)
 {
    $usuario= User ::findOrFail( auth()->user()->id);

        $car = \Session::get('arraysaldo');

      

        $total=0;
     

        try {

         foreach ($car as $linea ) {

           

              $compras=Compra::whereMonth('created_at', $mes)
                   ->whereYear('created_at', $anio)
                   ->where("asociado_membrecia","=",$linea["nombre"]->asociado_membrecia)
                   ->get();
               

                   if (count($compras)) {
                     foreach ($compras as $item) {
                       $comprat= $item->compra_totalVolumen;
                       $total+=$comprat;
                     }
                   } 
                   
                  
                      
                  
         }
         
        } catch (\Throwable $th) {
          //throw $th;
        }

     
      
       return $total;


 }

 private function linea()
 {
     $rootId= auth()->user()->asociado_membrecia;
     $data=Asociado ::all();
     $usuario= User ::findOrFail( auth()->user()->id);

     \Session::forget('arraysaldo');

     

       $array = [
           array('id' => '',
           'user' =>  $usuario,
           'parentId' => '')
   
       ]; 

       foreach ($data as $item ) {
           array_push($array, array('id' => $item->asociado_membrecia,
       'nombre' => $item,
       'parentId' => $item->padre));
       }
  

   $tree= $this->arbol($array,$rootId);
       
 $imprimir=  $this->almacenar($tree['root']);
 }

 function almacenar($tree) {

 
     foreach ($tree as $row)
     { 
             $car  = \Session::get('arraysaldo');

             $arrayim =array('id' =>$row['id'],
             'nombre' =>$row['nombre'],
             'parentId' => $row['parentId']);


                 $car [$row['id']] = $arrayim;
         
             \Session::put('arraysaldo',  $car);


                 
                     if (count($row['children'])>0){
                     $this-> almacenar($row['children']);
                     }
         
         
     } 

   
     } 






     function arbol($data, $rootId)
     {
     $tree = array('children' => array(),
     'root' => array()
     );
     foreach ($data as $ndx=>$node)
     {
     $id = $node['id'];
     /* Puede que exista el children creado si los hijos entran antes que el padre */
     $node['children'] = (isset($tree['children'][$id]))?$tree['children'][$id]['children']:array();
     $tree['children'][$id] = $node;

     if ($node['parentId'] == $rootId)
     $tree['root'][$id] = &$tree['children'][$id];
     else
     {
     $tree['children'][$node['parentId']]['children'][$id] = &$tree['children'][$id];
     }

     }
     return $tree;
     }



}
