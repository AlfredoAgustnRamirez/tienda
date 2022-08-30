<?php 
namespace App\Models;

use CodeIgniter\Model;

class CarritoModel extends Model{
    protected $table      = 'factura';
    protected $primaryKey = 'id_sale';

    protected $allowedFields = ['descripcion_sale', 'total_price_sale', 'created_at', 'updated_at', 'deleted_at', 'email_user'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    

}