<?php 
namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model{
    protected $table      = 'categorias';
    protected $primaryKey = 'id_categoria';

    protected $allowedFields = ['categoria_prod', 'estado_categoria'];
}