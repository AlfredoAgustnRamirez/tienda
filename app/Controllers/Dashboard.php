<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Models\ProductoModel;

class Dashboard extends BaseController
{
	public function index()
	{
		$NameModel = new ProductoModel();
		$data['productos'] = $NameModel->orderBy('id_producto', 'DESC')->findAll();
		$categorias['categorias'] = $NameModel->seleccionar_categoria();
		if (session()->get('perfil_id') == 2) {
			$data['title'] = 'Dashboard';
			echo view('front/header', $data);
			echo view('usuario/menu');
			echo view('usuario/dashboard_view');
			echo view('front/footer');
		} 
	}
}
