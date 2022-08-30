<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\ProductoModel;

class CrudController extends BaseController
{
    // show names list

    public function index()
    {
        $NameModel = new UsuarioModel();
        $data['usuarios'] = $NameModel->orderBy('id_usuario', 'DESC')->findAll();
        echo view('front/header');
        echo view('usuario/namelist', $data);
    }

    public function eliminados()
    {
        $NameModel = new UsuarioModel();
        $data['usuarios'] = $NameModel->orderBy('id_usuario', 'DESC')->findAll();
        echo view('front/header');
        echo view('usuario/eliminados', $data);
    }

    // add name form
    public function create()
    {
        return view('usuario/addname');
    }

    public function Validation()
    {
        //helper(['form', 'url']);

        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[3]|max_length[200]'
        ]);
        $formModel = new UsuarioModel();

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/header', $data);
            echo view('front/menu');
            echo view('usuario/addname', [
                'validation' => $this->validator
            ]);
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email'  => $this->request->getVar('email'),
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ]);
            return $this->response->redirect(site_url('usuario/namelist'));
        }
    }


    // add data
    public function store()
    {
        $NameModel = new UsuarioModel();
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'email'  => $this->request->getVar('email'),
            'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        $NameModel->insert($data);
        return $this->response->redirect(site_url('/namelist'));
    }

    // show single name
    public function singleUser($id = null)
    {
        $NameModel = new UsuarioModel();
        $Producto = new ProductoModel();
        $categorias['categorias'] = $Producto->seleccionar_categoria();
        $data['user_obj'] = $NameModel->where('id_usuario', $id)->first();
        echo view('front/header');
        echo view('usuario/menu', $categorias);
        echo view('usuario/editnames', $data);
        echo view('front/footer');
    }

    // update name data
    public function update()
    {
        $NameModel = new UsuarioModel();
        $id = $this->request->getVar('id_usuario');
        $data = [
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'email'  => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password'),

        ];
        $NameModel->update($id, $data);
        return $this->response->redirect(site_url('/namelist'));
    }

    // delete name
    public function delete($id = null)
    {
        $NameModel = new UsuarioModel();
        $data['usuarios'] = $NameModel->where('id_usuario', $id)->delete($id);
        return $this->response->redirect(site_url('/namelist'));
    }

    public function desactivar($baja = null)
    {
        $NameModel = new UsuarioModel();
        $data['productos'] = $NameModel->where('baja', $baja)->delete($baja);
        $data = ([
            'baja' => 0,
        ]);
        $NameModel->update($baja, $data);
        return $this->response->redirect(site_url('/namelist'));
    }

    public function activar($baja = null)
    {
        $NameModel = new UsuarioModel();
        $data['productos'] = $NameModel->where('baja', $baja)->delete($baja);
        $data = ([
            'baja' => 1,
        ]);
        $NameModel->update($baja, $data);
        return $this->response->redirect(site_url('/namelist'));
    }
}
