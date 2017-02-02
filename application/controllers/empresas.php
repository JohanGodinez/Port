<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('empresas_model');
    }
    function index(){
        $data['empresas'] = $this->empresas_model->listEmpresas();
        $titulo['titulo'] = "Empresas";
        $this->load->view('head', $titulo);
        $this->load->view('empresas/index',$data);
        $this->load->view('footer');
    }


}