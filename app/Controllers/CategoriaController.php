<?php

namespace App\Controllers;
use Config\Services;
use CodeIgniter\Controller;
use App\Models\CategoriaModel;

class CategoriaController extends BaseController
{
    public function mostrar_categoria()
    {
        
            $Categoria = new CategoriaModel();
            $data['categorias'] = $Categoria->orderBy('id_categoria', 'DESC')->findAll();
            $data['titulo'] = 'Mostrar categoria';
            echo view('front/header', $data);
            echo view('usuario/menu');
            echo view('productos/listado_categoria', $data);
            echo view('front/footer');
        
    }

    public function categorias(){
        $Categoria = new CategoriaModel();
        $data['categorias'] = $Categoria->orderBy('id_categoria', 'DESC')->findAll();
        $data['titulo'] = 'categorias';
        echo view('front/header', $data);
        echo view('usuario/menu');
        echo view('productos/categorias', $data);
        echo view('front/footer');
        
    }

    public function registrar_categoria()
    {  
        $Categoria = new CategoriaModel();
            $categoria = [
                'id_categoria' => $this->request->getVar('id_categoria'),
                'categoria_prod' => $this->request->getVar('categoria_prod'),   
            ];
            $Categoria->insert($categoria);
            return $this->response->redirect(site_url('/listado_categoria'));
    }

    public function eliminar_categoria($estado = null)
    {
        $Categoria = new CategoriaModel();
        $data['categorias'] = $Categoria->where('estado_categoria', $estado)->delete($estado);
        $data = ([
            'estado_categoria' => 0,
        ]);
        $Categoria->update($estado, $data);
        return $this->response->redirect(site_url('/listado_categoria'));
    }

    public function activar_categoria($estado = null)
    {
        $Categoria = new CategoriaModel();
        $data['categorias'] = $Categoria->where('estado_categoria', $estado)->delete($estado);
        $data = ([
            'estado_categoria' => 1,
        ]);
        $Categoria->update($estado, $data);
        return $this->response->redirect(site_url('/listado_categoria'));
    }

    public function editar_categoria()
    {
        $Categoria = new CategoriaModel();
        $id = $this->request->getVar('id_categoria');
        
        $data = [
            'id_categoria' => $this->request->getVar('id_categoria'),
            'categoria_prod' => $this->request->getVar('categoria_prod'),   
        ];
        $Categoria->update($id, $data);
        return $this->response->redirect(site_url('/listado_categoria'));
    }

    public function single_categoria($id = null)
    {
        $Categoria = new CategoriaModel();
        $categorias['categorias'] = $Categoria->where('id_categoria', $id)->first();
        return view('productos/editar_categoria', $categorias);
    }
}