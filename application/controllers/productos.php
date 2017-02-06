<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    function __construct(){
        parent::__construct();
        // $this->load->helper('form');
        // $this->load->model('cuentas_model');
    }	
    public function index()
	{   
        $titulo['string'] ='Productos';
        $this->load->view('head');
		$this->load->view('productos/index',$titulo);
        $this->load->view('footer');
	}

    // public function insert(){
    //     $datos = array(
    //         'nombre' => $this->input->post('nombreCuenta'),
    //         'telefono' => $this->input->post('telefonoCuenta'),
    //         'correo' => $this->input->post('correoCuenta')
    //     );
    //     $this->cuentas_model->insertCuenta($datos);
    //     $datos['string'] ='Cuenta Creada';
	// 	$this->load->view('cuentas/crear',$datos);
    // }
}
