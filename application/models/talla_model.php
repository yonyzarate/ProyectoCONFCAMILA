<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class talla_model extends CI_Model { 
    public function __construct()
    {
        parent::__construct();

 	}
    public function gettalla ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("talla");
        return $resultado->result();
    }
    public function save($data){
        return $this->db->insert("talla",$data);
    }

    public function new_talla($IdTalla){
        $this->db->where("IdTalla",$IdTalla);
        $resultado = $this->db->get("talla");
        return $resultado->row();
    }
    public function update($IdTalla,$data){
        $this->db->where("IdTalla",$IdTalla);
        return $this->db->update("talla",$data);
    }
}