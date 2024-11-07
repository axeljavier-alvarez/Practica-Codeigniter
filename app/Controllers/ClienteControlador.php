<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Clientes;
class ClienteControlador extends Controller{
    public function verClientes(){
        $clientes = new Clientes();
        //select * from clientes = findAll();
        $datosClientes['datosClientes']=$clientes->findAll();
        return view('vista_clientes',$datosClientes);
    }
    
    public function eliminarCliente($id=null){
        $clientes = new Clientes();
        $clientes->delete($id);
        return $this->verClientes();
    }
}