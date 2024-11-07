<?php

namespace App\Models;

use CodeIgniter\Model;

class VistaDatosPlanes extends Model
{
    protected $table      = 'view_datos_planes';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $allowedFields = [
        'no_telefono',
        'fecha_pago',
        'meses_atraso',
        'plan_id',
        'cliente_id',
        'nombre_cliente',
        'apellido_cliente',
        'nombre_plan'
    ];
}
