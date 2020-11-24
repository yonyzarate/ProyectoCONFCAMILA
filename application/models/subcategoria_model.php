<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subcategoria_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    }
    // consulta para listar los registros en una vista 
    public function getsubcategoria(){
        $this->db->select("sub.*, cat.Nombre AS Categoria ");
        $this->db->from("subcategoria sub");
        $this->db->join("categoria cat","cat.IdCategoria=sub.IdCategoria");
        $resultado = $this->db->get();
        return $resultado->result();
    }
    // consulta que inserta a la base datos el nuevo
    public function save($data){
        return $this->db->insert("subcategoria",$data);
    }

}