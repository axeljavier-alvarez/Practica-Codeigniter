<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VistaDatosPlanes;
use App\Models\Planes;
class VistaDatosPlanesControlador extends Controller{
    public function verDatosLineasTelefonicas(){
        
        //busqueda para cargar en la tabla
        $vistaDatos = new VistaDatosPlanes();
        $datos=$vistaDatos->findAll();

        //busqueda de los datos que se cargaran en la lista (select) de planes
        $planes = new Planes();
        $datosListaPlan=$planes->findAll();

        //array con los resultado de la busqueda
        $datosPlan = [
            "datosPlan" => $datos,
            "datosListaPlan" => $datosListaPlan,
        ];

        return view('vista_datos_plan',$datosPlan);
    }
}