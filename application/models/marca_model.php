<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class marca_model extends CI_Model {  
    public function __construct()
    {
        parent::__construct();

 	}
    public function getmarca ()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("marca");
        return $resultado->result();
    }

   
    public function save($data){
        return $this->db->insert("marca",$data);
    }
    
    public function newmarca($IdMarca){
        $this->db->where("IdMarca",$IdMarca);
        $resultado = $this->db->get("marca");
        return $resultado->row();
    }
    public function update($IdMarca,$data){
        $this->db->where("IdMarca",$IdMarca);
        return $this->db->update("marca",$data);
    }
}