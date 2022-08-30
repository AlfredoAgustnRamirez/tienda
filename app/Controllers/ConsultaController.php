<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ConsultaModel;
use App\Models\ProductoModel;
use Config\Services;

class ConsultaController extends BaseController
{

    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function contacto()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $session = session()->get('isLoggedIn');
        if ($session) {
            $data['titulo'] = 'Contacto';
            echo view('front/header', $data);
            echo view('usuario/menu', $categorias);
            echo view('usuario/contacto');
            echo view('front/footer');
        } else {
            $data['titulo'] = 'Contacto';
            echo view('front/header', $data);
            echo view('front/menu',$categorias);
            echo view('contacto');
            echo view('front/footer');
        }
    }

    public function verificar_contacto()
    {
        //helper(['form', 'url']);
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'telefono'  => 'required|min_length[3]',
            'consulta' => 'required|min_length[3]|max_length[200]'


        ]);
        $formModel = new ConsultaModel();
        if ($input) {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'telefono'  => $this->request->getVar('telefono'),
                'consulta'  => $this->request->getVar('consulta'),
                'fecha'     => date('Y-m-d H:i:s'),
                'estado_consulta' => 1,
                'registrado' => 'No'
            ]);
            echo view('front/header');
            echo view('front/menu',$categorias);
            echo view('contacto', [
                'validation' => $this->validator
            ]);
            echo view('front/footer');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'telefono'  => $this->request->getVar('telefono'),
                'consulta'  => $this->request->getVar('consulta'),
                'fecha'     => date('Y-m-d H:i:s'),
                'estado_consulta' => 1,
                'registrado' => 'SI'
            ]);
            echo view('front/header');
            echo view('front/menu', $categorias);
            echo view('contacto');
            echo view('front/footer');
        }
    }

    public function insertar_contacto()
    {
        $formModel = new ConsultaModel();
        $consulta = array([
            'nombre'    => $this->input->post('nombre'),
            'apellido'  => $this->input->post('apellido'),
            'email'        => $this->input->post('email'),
            'telefono'    => $this->input->post('telefono'),
            'consulta'    => $this->input->post('consulta'),
            'fecha'     => date('Y-m-d H:i:s'),
            'estado_consulta' => 1,
            'registrado' => 'NO'
        ]);
        $this->$formModel->insert($consulta);
        return view('usuario/contacto');
    }

    public function verificar_consulta()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'telefono'  => 'required|min_length[3]',
            'consulta' => 'required|min_length[3]|max_length[200]'
        ]);
        $formModel = new ConsultaModel();
        if ($input) {
            $data['titulo'] = 'Consulta';
            echo view('front/header', $data);
            echo view('front/menu');
            echo view('usuario/contacto', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email' => $this->request->getVar('email'),
                'telefono'  => $this->request->getVar('telefono'),
                'consulta'  => $this->request->getVar('consulta'),
                'fecha'     => date('Y-m-d H:i:s'),
                'estado_consulta' => 1,
                'registrado' => 'SI'
            ]);
            echo view('front/header');
            echo view('usuario/menu', $categorias);
            echo view('usuario/contacto');
            echo view('front/footer');
        }
    }

    public function listado_consultas()
    {
        $NameModel = new ConsultaModel();
        $data['consultas'] = $NameModel->orderBy('id_consultas', 'DESC')->findAll();
        echo view('front/header');
        echo view('usuario/menu');
        echo view('usuario/listado_consultas', $data);
        echo view('front/footer');
    }

    public function listado_consulta()
    {
        $NameModel = new ConsultaModel();
        $data['consultas'] = $NameModel->orderBy('id_consultas', 'DESC')->findAll();
        echo view('front/header');
        echo view('usuario/menu');
        echo view('usuario/listado_consulta', $data);
        echo view('front/footer');
    }
}
