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

    function crear(){
        $titulo['titulo'] = "Crear Empresas";
        $this->load->view('head');
        $this->load->view('empresas/crear', $titulo);
        $this->load->view('footer');
    }
    
    // function insert(){
    //     $datos = array(
    //         'cuentaID' => $this->input->$_SESSION['empresaID'],
    //         'tipoempresaid' => $this->input->post('tipoEmpresa'),
    //         'nombre' => $this->input->post('nombre'),
    //         'nombrecomercial' => $this->input->post('nombrecomercial'),
    //         'telefono' => $this->input->post('telefono'),
    //         'direccion' => $this->input->post('direccion')
    //     );
    //     $data['empresas'] = $this->empresas_model->listEmpresas();
    //     $this->load->view('head');
    //     $this->load->view('empresas/index',$data);
    //     $this->load->view('footer');
    // }

}