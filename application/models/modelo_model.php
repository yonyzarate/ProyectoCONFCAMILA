<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelo_model extends CI_Model {  
    public function __construct()
    {
        parent::__construct();

 	}
    public function getmodelo()
    {
        $this->db->where("Estado","Activo");
        $resultado = $this->db->get("modelo");
        return $resultado->result();
    }

   
    public function save($data){
        return $this->db->insert("modelo",$data);
    }
    
    public function newmodelo($IdModelo){
        $this->db->where("IdModelo",$IdModelo);
        $resultado = $this->db->get("modelo");
        return $resultado->row();
    }
    public function update($IdModelo,$data){
        $this->db->where("IdModelo",$IdModelo);
        return $this->db->update("modelo",$data);
    }
}