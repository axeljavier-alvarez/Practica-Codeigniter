<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Planes;
class PlanesControlador extends Controller{
    public function verPlanes(){
        //crear un objeto de Planes
        $planes = new Planes();
        $datosPlanes['datosPlanes']=$planes->findAll();
        return view('vista_planes',$datosPlanes);
    }
    public function guardarPlan(){
        //recibir los datos de los elementos(controles) del formulario
        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $pagoMensual = $this->request->getVar('txt_pago_mensual');
        $cantMinutos = $this->request->getVar('txt_cantidad_minutos');
        $cantMensajes = $this->request->getVar('txt_cantidad_mensaje');

        //trasladar los datos a un array para enviarlos a la tabla de la base de datos
        $datos=[
            'plan_id'=>$id,
            'nombre'=>$nombre,
            'pago_mensual'=>$pagoMensual,
            'cantidad_minutos'=>$cantMinutos,
            'cantidad_mensajes'=>$cantMensajes
        ];
        //instanciar la clase Planes (modelo) que tiene la conexión con la tabla
        $planes =new Planes();
        $planes->insert($datos);
        //mostrar la vista (lista de planes)

        return $this->verPlanes();
    }
    public function eliminarPlan($id=null){
        //echo "ID a eliminar: ". $id;
        $planes = new Planes();
        $planes->delete($id);

        //llamar al metodo de busqueda
        return $this->verPlanes();
    }
    public function datosActualizar($id=null){
        //buscar el registro correspondiente al parametro enviado
        $planes = new Planes();
        //select * from planes where plan_id=$id
        $datosPlan['datosPlan'] = $planes->where('plan_id',$id)->first();
        return view ('frm_actualizar_plan',$datosPlan);
    }
    public function modificarPlan(){
        //recibir los datos de los elementos(controles) del formulario
        $id = $_POST['txt_id'];
        $nombre = $_POST['txt_nombre'];
        $pagoMensual = $_POST['txt_pago_mensual'];
        $cantMinutos = $_POST['txt_cantidad_minutos'];
        $cantMensajes = $_POST['txt_cantidad_mensajes'];
        /*
        echo "<br>".$id;
        echo "<br>".$nombre;
        echo "<br>".$pagoMensual;
        echo "<br>".$cantMinutos;
        echo "<br>".$cantMensajes;
        */     
        //trasladar los datos a un array para enviarlos a la tabla de la base de datos
        $datos=[
            'nombre'=>$nombre,
            'pago_mensual'=>$pagoMensual,
            'cantidad_minutos'=>$cantMinutos,
            'cantidad_mensajes'=>$cantMensajes
        ];
        //instanciar la clase Planes (clase que tiene conexion con la tabla)
        $planes = new Planes();
        $planes->update($id,$datos);
        //llamar al metodo de busqueda
        return $this->verPlanes();
        
    }

}