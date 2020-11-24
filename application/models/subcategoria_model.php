<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subcategoria_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
    public function getsubcategoria(){
        $this->db->select("sub.*, cat.Nombre AS Categoria ");
        $this->db->from("subcategoria sub");
        $this->db->join("categoria cat","cat.IdCategoria=sub.IdCategoria");
        $resultado = $this->db->get("subcategoria");
        return $resultado->result();
    }

}