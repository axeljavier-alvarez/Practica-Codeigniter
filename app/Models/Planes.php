<?php

namespace App\Models;

use CodeIgniter\Model;

class Planes extends Model
{
    protected $table      = 'planes';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'plan_id';
    protected $allowedFields = [
        'plan_id', 'nombre', 'pago_mensual', 'cantidad_minutos', 'cantidad_mensajes'
    ];
}
