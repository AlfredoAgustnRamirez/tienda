<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\ProductoModel;
use App\Services\Config;

class Home extends BaseController
{
    public function index()
    {
        $NameModel = new ProductoModel();
        $data['productos'] = $NameModel->orderBy('id_producto', 'DESC')->findAll();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        if (session()->get('perfil_id') == 1) {
            $data['titulo'] = 'Techno-RA';
            echo view('front/header', $data);
            echo view('usuario/menu', $categorias);
            echo view('front/body');
            echo view('productos/mostrar_productos', $data);
            echo view('front/footer');
        } else {
            $data['titulo'] = 'Techno-RA';
            echo view('front/header', $data);
            echo view('front/menu', $categorias);
            echo view('front/body');
            echo view('producto', $data);
            echo view('front/footer');
        }
    }

    public function nosotros()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $session = session()->get('isLoggedIn');
        if ($session) {
            $data['titulo'] = 'Quienes Somos';
            echo view('front/header', $data);
            echo view('usuario/menu', $categorias);
            echo view('nosotros');
            echo view('front/footer');
        } else {
            $data['titulo'] = 'Quienes Somos';
            echo view('front/header', $data);
            echo view('front/menu', $categorias);
            echo view('nosotros');
            echo view('front/footer');
        }
    }

    public function terminos()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $session = session()->get('isLoggedIn');
        if ($session) {
            $data['titulo'] = 'Términos y condiciones';
            echo view('front/header', $data);
            echo view('usuario/menu', $categorias);
            echo view('terminos');
            echo view('front/footer');
        } else {
            $data['titulo'] = 'Términos y condiciones';
            echo view('front/header', $data);
            echo view('front/menu', $categorias);
            echo view('terminos');
            echo view('front/footer');
        }
    }

    public function comercializacion()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $session = session()->get('isLoggedIn');
        if ($session) {
            $data['titulo'] = 'Comercialización';
            echo view('front/header', $data);
            echo view('usuario/menu', $categorias);
            echo view('comercializacion');
            echo view('front/footer');
        } else {
            $data['titulo'] = 'Comercialización';
            echo view('front/header', $data);
            echo view('front/menu',$categorias);
            echo view('comercializacion');
            echo view('front/footer');
        }
    }

    public function contacto()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        if (session()->get('perfil_id') == 1) {
            $data['titulo'] = 'Contacto';
            echo view('front/header', $data);
            echo view('usuario/menu', $categorias);
            echo view('usuario/contacto');
            echo view('front/footer');
        } else {
            $data['titulo'] = 'Contacto';
            echo view('front/header', $data);
            echo view('front/menu', $categorias);
            echo view('contacto');
            echo view('front/footer');
        }
    }
}
