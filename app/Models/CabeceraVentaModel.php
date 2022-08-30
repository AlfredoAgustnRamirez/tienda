<?php 
namespace App\Models;

use CodeIgniter\Model;

class CabeceraVentaModel extends Model{
    protected $table      = 'cabecera_ventas';
    protected $primaryKey = 'id_ventas';

    protected $allowedFields = ['fecha', 'id_usuario', 'total_ventas'];
    
}