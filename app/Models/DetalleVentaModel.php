<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetalleVentaModel extends Model{
    protected $table      = 'Detalle_ventas';
    protected $primaryKey = 'id_detalle';

    protected $allowedFields = ['id_ventas', 'id_producto', 'id_cliente', 'cantidad', 'precio', 'total'];
    
}