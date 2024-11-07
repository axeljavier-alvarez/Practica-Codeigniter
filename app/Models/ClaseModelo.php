<?php 
namespace App\Models;

use CodeIgniter\Model;

class ClaseModelo extends Model{
    protected $table      = 'nombre_tabla';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields=['',''];
}