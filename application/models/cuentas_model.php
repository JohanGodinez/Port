<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuentas_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function insertCuenta($datos){
        $this->db->insert('cuentas',array('nombre'=>$datos['nombre'],'telefono'=>$datos['telefono'],'correo'=>$datos['correo'] ));
        $_SESSION['empresaID'] = 1;
    }
}