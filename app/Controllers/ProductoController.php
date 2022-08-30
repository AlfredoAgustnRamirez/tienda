<?php

namespace App\Controllers;

use App\Models\CategoriaModel;
use CodeIgniter\Controller;
use App\Models\ProductoModel;

class ProductoController extends BaseController
{
    public function index()
    {
        $NameModel = new ProductoModel();
        $data['productos'] = $NameModel->orderBy('id_producto', 'DESC')->findAll();
        echo view('front/header');
        echo view('usuario/menu');
        echo view('productos/listado_producto', $data);
        echo view('front/footer');
    }

    public function eliminados()
    {
        $ProductModel = new ProductoModel();
        $productos['productos'] = $ProductModel->orderBy('id_producto', 'DESC')->findAll();
        echo view('front/header');
        echo view('usuario/menu');
        echo view('productos/productos_eliminados', $productos);
        echo view('front/footer');
    }

    public function mostrar_todos()
    {
        $session = session()->get('isLoggedIn');
        $NameModel = new ProductoModel();
        $data['productos'] = $NameModel->orderBy('id_producto', 'DESC')->findAll();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        if ($session) {
            $data['titulo'] = 'Mostrar Producto';
            echo view('front/header', $data);
            echo view('usuario/menu', $categorias);
            echo view('front/body');
            echo view('productos/mostrar_productos', $data);
            echo view('front/footer');
        } else {
            $data['titulo'] = 'Productos';
            echo view('front/header', $data);
            echo view('front/menu', $categorias);
            echo view('producto', $data);
            echo view('front/footer');
        }
    }

    public function create()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        echo view('front/header');
        echo view('usuario/menu');
        echo view('productos/addproducto', $categorias);
        echo view('front/footer');
    }

    public function store()
    {
        $NameModel = new ProductoModel();

        $img = $this->request->getFile('imagen');
        $newName = $img->getRandomName();
        $img->move('uploads', $newName);
        $data = [
            'id_producto' => $this->request->getVar('id_producto'),
            'cod'  => $this->request->getVar('cod'),
            'titulo' => $this->request->getVar('titulo'),
            'id_categoria'  => $this->request->getVar('id_categoria'),
            'copete'  => $this->request->getVar('copete'),
            'descripcion'  => $this->request->getVar('descripcion'),
            'marca'  => $this->request->getVar('marca'),
            'precio'  => $this->request->getVar('precio'),
            'stock'  => $this->request->getVar('stock'),
            'imagen'  => $img->getName('imagen'),
            'estado'  => $this->request->getVar('estado'),
        ];
        $NameModel->insert($data);
        return $this->response->redirect(site_url('/listado_producto'));
    }

    public function singleProducto($id = null)
    {
        $NameModel = new ProductoModel();
        $data['produc_obj'] = $NameModel->where('id_producto', $id)->first();
        echo view('front/header');
        echo view('productos/editproducto', $data);
    }

    public function update_producto()
    {
        $NameModel = new ProductoModel();
        $id = $this->request->getVar('id_producto');
        $img = $this->request->getFile('imagen');
        $newName = $img->getRandomName();
        $img->move('uploads', $newName);
        $data = [
            'id_producto' => $this->request->getVar('id_producto'),
            'cod' => $this->request->getVar('cod'),
            'titulo'  => $this->request->getVar('titulo'),
            'id_categoria' => $this->request->getVar('id_categoria'),
            'copete'  => $this->request->getVar('copete'),
            'descripcion'  => $this->request->getVar('descripcion'),
            'marca'  => $this->request->getVar('marca'),
            'precio'  => $this->request->getVar('precio'),
            'stock'  => $this->request->getVar('stock'),
            'imagen'  => $img->getName('imagen'),
            'estado'  => $this->request->getVar('estado'),
        ];
        $NameModel->update($id, $data);
        return $this->response->redirect(site_url('/listado_producto'));
    }

    public function quitar($estado = null)
    {
        $NameModel = new ProductoModel();
        $data['productos'] = $NameModel->where('estado', $estado)->delete($estado);
        $data = ([
            'estado' => 0,
        ]);
        $NameModel->update($estado, $data);
        return $this->response->redirect(site_url('/listado_producto'));
    }

    public function colocar($estado = null)
    {
        $NameModel = new ProductoModel();
        $data['productos'] = $NameModel->where('estado', $estado)->delete($estado);
        $data = ([
            'estado' => 1,
        ]);
        $NameModel->update($estado, $data);
        return $this->response->redirect(site_url('/listado_producto'));
    }
}
