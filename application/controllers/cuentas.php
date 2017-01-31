<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuentas extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
	public function index()
	{
        $dato['string'] = "Cuentas";
		$this->load->view('cuentas/crear', $dato);
	}
}
