<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function insertProducto($datos){
        $this->db->insert('productos',array('empresaid'=> 1,'nombre'=>$datos['nombre'],'cantidad'=>$datos['cantidad'],'precio'=>$datos['precio'],'descripcion'=>$datos['descripcion']  ));
    }
}