<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    function listEmpresas(){
        $query = $this->db->get('empresas');
        if($query->num_rows() > 0) return $query;
        else return false;
    }

    // function insertCuenta($datos){
    //     $this->db->insert('empresas',array('nombre'=>$datos['nombre'],'telefono'=>$datos['telefono'],'correo'=>$datos['correo'] ));
    // }
}