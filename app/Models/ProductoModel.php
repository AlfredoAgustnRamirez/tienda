<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model{
    protected $table      = 'productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFields = ['cod', 'titulo', 'id_categoria', 'copete', 'descripcion', 'marca', 'precio', 'stock', 'imagen', 'estado'];

    public function actualizar_stock($id_producto, $cantidad){
        $this->set('stock', "stock - $cantidad", FALSE);
        $this->where('id_producto', $id_producto);
        $this->update();
    }

    public function seleccionar_categoria(){
        $db      = \Config\Database::connect();
        $builder = $db->table('categorias');
        $builder->select('*');
        $query = $builder->get();
        return $query->getResult();
    }
}