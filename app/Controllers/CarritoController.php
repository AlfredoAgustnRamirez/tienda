<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\BaseBuilder;
use App\Models\CabeceraVentaModel;
use App\Models\DetalleVentaModel;
use App\Models\ClienteModel;
use App\Models\CarritoModel;
use App\Models\ProductoModel;
use App\Models\UsuarioModel;

class CarritoController extends BaseController
{
    public function __construct()
    {
        
        helper(['form', 'url', 'cart']);
        $session = session();
        $cart = \Config\Services::cart();
        $cart->contents();

        if ($cart == null) {
            $cart = ['cart_total' => 0, 'total_items' => 0];
        }
        log_message('info', 'Cart Class Initialized');
    }

    public function index()
    {
        $NameModel = new ProductoModel();
        $data['productos'] = $NameModel->orderBy('id_producto', 'DESC')->findAll();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        if (session()->get('perfil_id') == 1) {
        echo view('front/header', $data);
        echo view('usuario/menu', $categorias);
        echo view('front/body');
        echo view('carrito/mostrar_carrito');
        echo view('front/footer');
        }
    }

    public function agregar()
    {
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();
        $data = array(
            'id'      => $request->getPost('id_producto'),
            'qty'     => 1,
            'price'   => $request->getPost('precio'),
            'name'    => $request->getPost('titulo'),
            'imagen' => $request->getPost('imagen')
        );

        $cart->insert($data);
        return redirect()->back()->withInput();
    }

    public function borrar_carrito()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();

        return $this->response->redirect(site_url('mostrar_carrito'));
    }

    public function quitar_carrito($rowid)
    {
        $cart = \Config\Services::cart();
        $cart->remove($rowid);
        return $this->response->redirect(site_url('mostrar_carrito'));
    }

    public function muestra()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        helper(['form', 'url', 'cart']);
        $cart = \Config\Services::cart();
        $cart->contents();
        $dato = array('titulo' => 'Confirmar compra');

        $session = session();
        $nombre = $session->get('nombre');
        $perfil_id = $session->get('perfil_id');
        $email = $session->get('email');


        echo view('front/header', $dato);
        echo view('usuario/menu', $categorias);
        echo view('carrito/carrito_view');
        echo view('front/footer');
    }

    public function carrito_actualiza()
    {
        
        $cart = \Config\Services::cart();
        $request = \Config\Services::request();
        $data = $request->getPost();

		$cart->update($data); 
        $this->response->redirect('mostrar_carrito', 'refresh');    }

    public function finalizar_compra()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $data['titulo'] = 'Finalizar-Compra';
        echo view('front/header', $data);
        echo view('usuario/menu', $categorias);
        echo view('front/body');
        echo view('carrito/finalizar_compra');
        echo view('front/footer');
    }


    public function verificar_compra()
    {
        $input = $this->validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'    => 'required|min_length[4]|max_length[100]',
            'telefono'  => 'required|min_length[3]',
            'direccion' => 'required|min_length[3]|max_length[200]',
            'ciudad' => 'required|min_length[3]|max_length[200]',
            'cod_postal' => 'required|min_length[3]|max_length[200]'
        ]);
        if (!$input) {
            $this->finalizar_compra();
        } else {

            $this->comprar_carrito();
        }
    }

    public function mostrar_detalles()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('detalle_ventas');
        $builder->select('*');
        $builder->join('productos', 'productos.id_producto = detalle_ventas.id_producto');
        $builder->join('cabecera_ventas', 'cabecera_ventas.id_ventas = detalle_ventas.id_ventas');
        $builder->join('clientes', 'clientes.id_cliente = detalle_ventas.id_cliente');
        $query = $builder->get();
        return $query->getResult();
    }
   
    public function muestra_detalle()
    {
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        $request = \Config\Services::request();
        $id_venta = $request->uri->getSegment(2);
        $detalles['detalles'] = $this->mostrar_detalles($id_venta);
        echo view('front/header');
        echo view('usuario/menu', $categorias);
        echo view('carrito/compra_detalles', $detalles);
        echo view('front/footer');
    }

    public function insertar_cliente($cliente)
    {
        $this->db->insert('clientes', $cliente);
        return $this->db->insert_id();
    }

    
    public function comprar_carrito(){
        $NameModel = new ProductoModel();
        $categorias['categorias'] = $NameModel->seleccionar_categoria();
        helper(['form', 'uri']);
        $request = \Config\Services::request();
        $cart = \Config\Services::cart();
        $cart->contents();
    
		$venta = array(
			'fecha' 		=> date('Y-m-d'),
			'id_usuario' 	=> session()->get('id_usuario'),
			'total_ventas'	=>  $cart->total(),
		);	

        $ModelCabecera = new CabeceraVentaModel();
        $venta_id = $ModelCabecera->insert($venta); //inserta en la tabla venta_cabecera

		$cliente = [
            'email' => $this->request->getPost('email'),
            'telefono' => $this->request->getPost('telefono'),
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'direccion' => $this->request->getPost('direccion'),
            'ciudad' => $this->request->getPost('ciudad'),
            'cod_postal' => $this->request->getPost('cod_postal')
        ];

		$ModelCliente = new ClienteModel();
        $orden['clientes'] = $ModelCliente->insert($cliente);	
			
	
		if ($cart = $cart->contents()):
			foreach ($cart as $item):
				$detalle_venta = array(
					'id_ventas'  	=> $venta_id,
					'id_cliente'	=> $orden,
					'id_producto' 	=> $item['id'],
					'cantidad' 		=> $item['qty'],
					'precio' 		=> $item['price'],
					'total' 		=> $item['subtotal']
					);
            	$ModelDetalle = new DetalleVentaModel();
                $ventaTotal = $ModelDetalle->insert($detalle_venta); //inserta en la tabla venta_detalle

            	$productModel = new ProductoModel();
                $productModel->actualizar_stock($item['id'],$item['qty']);

			endforeach;
		endif;
	    
		$data['titulo'] = 'Compra-Finalizada';

		$ventaTotal = $request->uri->getSegment(2);
		$detalles['detalles'] = $this->mostrar_compra($ventaTotal);

        echo view('front/header', $data);
        echo view('usuario/menu', $categorias);
        echo view('carrito/compra_realizada', $detalles);
        echo view('front/footer');

        $cart = \Config\Services::cart();
		$cart->destroy();
	}

    public function mostrar_compra($id = null)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('Detalle_ventas');
        $builder->select('*');
        $builder->join('productos', 'productos.id_producto = detalle_ventas.id_producto');
        $builder->join('cabecera_ventas', 'cabecera_ventas.id_ventas = detalle_ventas.id_ventas');
        $builder->join('clientes', 'clientes.id_cliente = detalle_ventas.id_cliente');
        $query = $builder->get();
        return  $query->getResult();
    }

}
