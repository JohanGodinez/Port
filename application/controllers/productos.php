<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('productos_model');
    }	
    public function index()
	{   
        $titulo['string'] ='Productos';
        $this->load->view('head');
		$this->load->view('productos/index',$titulo);
        $this->load->view('footer');
	}

    //Crear registros
    public function crear()
	{   
        $titulo['titulo'] ='Nuveo articulo';
        $this->load->view('head');
		$this->load->view('productos/crear',$titulo);
        $this->load->view('footer');
	}

    public function insert(){
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'cantidad' => $this->input->post('cantidad'),
            'precio' => $this->input->post('precio'),
            'descripcion' => $this->input->post('descripcion')
        );
        $this->cuentas_model->insertCuenta($datos);
		$this->load->view('cuentas/');
    }

    //Modificar registros
    public function editar()
	{   
        $titulo['titulo'] ='Nuveo Producto';
        $this->load->view('head');
		$this->load->view('productos/crear',$titulo);
        $this->load->view('footer');
	}

    public function edit(){
        $datos = array(
            'nombre' => $this->input->post('nombre'),
            'cantidad' => $this->input->post('cantidad'),
            'precio' => $this->input->post('precio'),
            'descripcion' => $this->input->post('descripcion')
        );
        $this->cuentas_model->insertCuenta($id,$datos);
		$this->load->view('cuentas/');
    }
}
