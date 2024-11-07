<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table      = 'usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user', 'password', 'nombre', 'email', 'active','user_type_id'
    ];
}