<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\ProductoModel;

class LoginController extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }

    public function inicio()
    {
        $NameModel = new ProductoModel();
        $data['productos'] = $NameModel->orderBy('id_producto', 'DESC')->findAll();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $data['titulo'] = 'login';
        echo view('front/header', $data);
        echo view('front/menu',$categorias);
        echo view('usuario/login');
        echo view('front/footer');
    }

    public function login()
    {
        $session = session();
        $userModel = new UsuarioModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'isLoggedIn' => true
                ];
                $session->set($ses_data);
                return redirect()->to('');
            } else {
                $session->setFlashdata('msg', 'Password incorrecto.');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email no existe.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
