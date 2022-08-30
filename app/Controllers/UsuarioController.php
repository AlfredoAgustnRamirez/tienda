<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsuarioModel;
use App\Models\ProductoModel;
use Config\Services;

class UsuarioController extends BaseController{

    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function create()
    {
        $NameModel = new ProductoModel();
        $data['productos'] = $NameModel->orderBy('id_producto', 'DESC')->findAll();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $data['titulo'] = 'registro';
        echo view('front/header', $data);
        echo view('front/menu',$categorias);
        echo view('usuario/registrar');
        echo view('front/footer');
    }

    public function formValidation()
    {
        //helper(['form', 'url']);
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'nombre'   => 'required|min_length[3]',
            'usuario'   => 'required|min_length[3]',
            'password' => 'required|min_length[3]|max_length[200]',
        ]);
        $formModel = new UsuarioModel();

        if (!$input) {
            $data['titulo'] = 'Registro';
            echo view('front/header', $data);
            echo view('front/menu',$categorias);
            echo view('usuario/registrar', [
                'validation' => $this->validator
            ]);
            echo view('front/footer');
        } else {
            $formModel->save([
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'email'  => $this->request->getVar('email'),
                'password'  => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT)
            ]);
            return $this->response->redirect(site_url(''));
        }
    }

	public function singleUsuario($id = null)
    {
        $NameModel = new UsuarioModel();
        $data['user_obj'] = $NameModel->where('id_usuario', $id)->first();
        return view('usuario/editnames', $data);
    }

	public function profile()
	{
		$data['titulo'] = 'registro';
        echo view('front/header', $data);
        echo view('usuario/menu');
        echo view('usuario/editnames');
        echo view('front/footer');
	}

	public function update(){
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

    public function save(){
		$userModel = new UsuarioModel();

		$validation = $this->validate([
			'nombre' => 'required',
			'email' => 'required|valid_email',
			'apellido' => 'required|min_length[10]',
		]);

		if(!$validation){

			return redirect()->to('/usuario')->withInput();
			
		} else {

			$data = [
				'nombre' => $this->request->getVar('nombre'),
				'email' => $this->request->getVar('email'),
				'apellido' => $this->request->getVar('apellido'),
			];
			
			$userModel->createUser($data);
			
			$session = Services::session();
			$session->setFlashdata('success', 'Los datos se guardaron correctamente');
			
			return redirect()->to('/usuarios');
			
		}

	}

    public function editar($id){
		$userModel = new UsuarioModel();

		$validation = $this->validate([
			'nombre' => 'required',
			'email' => 'required|valid_email',
			'apellido' => 'required|min_length[10]',
		]);

		if(!$validation){

			return redirect()->to('/usuario'.$id)->withInput();
			
		} else {

			$data = [
				'nombre' => $this->request->getVar('nombre'),
				'email' => $this->request->getVar('email'),
				'apellido' => $this->request->getVar('apellido'),
			];
	
			$userModel->updateUser($id, $data);

			$session = Services::session();
			$session->setFlashdata('success', 'Los datos se actualizaron correctamente');
	
			return redirect()->to('/usuarios');
		}

	}

    public function delete($id){
		$userModel = new UsuarioModel();
		$userModel->deleteUser($id);

		$session = Services::session();
		$session->setFlashdata('success', 'Los datos se eliminaron correctamente');

		return redirect()->to('/usuarios');
	}

}

