<?php

namespace App\Controllers;
use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    public function index()
    {
        return view('menu');
    }
    public function iniciarSesion(){
        $usuario = $this->request->getPost('txtUsuario');
        $contra = $this->request->getPost('txtContra');

        /*
        echo "usuario: ". $usuario;
        echo "contra: ". $contra;
        */
        
        /*  buscar en la tabla usuarios los datos ingresados en el formulario, si existen se crea una sesion para autorizar acceso
            y llevar al menu correspondiente para el tipo de usuario 
        */
        $usuarioModel = new UsuariosModel();
        $datos = $usuarioModel->where('user',$usuario)->where('password',$contra)->first();
        //si el usuario es localizado(datos existen)
        if($datos){
            //se crean las siguientes variables de session para poderas utilzar en cualquier página a la que tenga acceso
            session()->set([
                'id'=>$datos['id'],
                'nombre'=>$datos['name'],
                'email'=>$datos['email'],
                'usuario'=>$datos['user'],
                'tipo'=>$datos['user_type_id']
            ]);
            //print_r(session());
            //dependiendo del tipo se da acceso a una pagina distinta
            if($datos['user_type_id']==1){
                //redireccione a una ruta para que carge todos los datos correspondiente
                //pero se puede direccionar a una vista que puede ser un menu principal
                return redirect()->to('clientes');
            }elseif($datos['user_type_id']==2){
                return redirect()->to('planes');
            }elseif($datos['user_type_id']==3){
                return redirect()->to('lineas_telefonicas');
            }else{
                return redirect()->back()->with('mensaje','El usario no tiene permisos en el sistemas');
            }

        }else{
            return redirect()->back()->with('mensaje','Datos incorrectos, no puede iniciar sesión');
        }
        
        

    }

    public function cerrarSesion(){
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}