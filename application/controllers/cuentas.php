<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuentas extends CI_Controller {
    function __construct(){
        parent::__construct();
         $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('cuentas_model');
    }	
    public function index()
	{   
        $datos['string'] ='Crear cuenta';
        // $this->load->view('head');
		$this->load->view('cuentas/crear',$datos);
        // $this->load->view('footer');
	}

    public function insert(){
        $datos = array(
            'tipoempresaid' => $this->input->post('tipoempresaid'),
            'nombre' => $this->input->post('nombreCuenta'),
            'telefono' => $this->input->post('telefonoCuenta'),
            'correo' => $this->input->post('correoCuenta')
        );
        $this->cuentas_model->insertCuenta($datos);
        $datos['string'] ='Cuenta Creada';
		$this->load->view('productos/crear',$datos);
    }
}
