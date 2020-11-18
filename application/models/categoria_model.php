<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categoria_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

 	}
    public function getcategoria ()
    {
        // $this->db->select(" ca.IdCategoria, ca.Nombre from categoria as ca");
        $resultado = $this->db->get("categoria");
        return $resultado->result();
    }
}
?>