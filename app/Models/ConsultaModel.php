<?php 
namespace App\Models;

use CodeIgniter\Model;

class ConsultaModel extends Model{
    protected $table      = 'consultas';
    protected $primaryKey = 'id_consultas';

    protected $allowedFields = ['nombre', 'apellido', 'email', 'telefono', 'consulta', 'fecha', 'estado_consulta', 'registrado'];
}